<?php

/**
 * @file
 * Contains \Drupal\block_content\Tests\PageEditTest.
 */

namespace Drupal\block_content\Tests;

/**
 * Create a block and test block edit functionality.
 *
 * @group block_content
 */
class PageEditTest extends BlockContentTestBase {

  /**
   * Checks block edit functionality.
   */
  public function testPageEdit() {
    $this->drupalLogin($this->adminUser);

    $title_key = 'info[0][value]';
    $body_key = 'body[0][value]';
    // Create block to edit.
    $edit = array();
    $edit['info[0][value]'] = drupal_strtolower($this->randomName(8));
    $edit[$body_key] = $this->randomName(16);
    $this->drupalPostForm('block/add/basic', $edit, t('Save'));

    // Check that the block exists in the database.
    $blocks = \Drupal::entityQuery('block_content')->condition('info', $edit['info[0][value]'])->execute();
    $block = entity_load('block_content', reset($blocks));
    $this->assertTrue($block, 'Custom block found in database.');

    // Load the edit page.
    $this->drupalGet('block/' . $block->id());
    $this->assertFieldByName($title_key, $edit[$title_key], 'Title field displayed.');
    $this->assertFieldByName($body_key, $edit[$body_key], 'Body field displayed.');

    // Edit the content of the block.
    $edit = array();
    $edit[$title_key] = $this->randomName(8);
    $edit[$body_key] = $this->randomName(16);
    // Stay on the current page, without reloading.
    $this->drupalPostForm(NULL, $edit, t('Save'));

    // Edit the same block, creating a new revision.
    $this->drupalGet("block/" . $block->id());
    $edit = array();
    $edit['info[0][value]'] = $this->randomName(8);
    $edit[$body_key] = $this->randomName(16);
    $edit['revision'] = TRUE;
    $this->drupalPostForm(NULL, $edit, t('Save'));

    // Ensure that the block revision has been created.
    $revised_block = entity_load('block_content', $block->id(), TRUE);
    $this->assertNotIdentical($block->getRevisionId(), $revised_block->getRevisionId(), 'A new revision has been created.');

    // Test deleting the block.
    $this->drupalGet("block/" . $revised_block->id());
    $this->clickLink(t('Delete'));
    $this->assertText(format_string('Are you sure you want to delete !label?', array('!label' => $revised_block->label())));
  }

}
