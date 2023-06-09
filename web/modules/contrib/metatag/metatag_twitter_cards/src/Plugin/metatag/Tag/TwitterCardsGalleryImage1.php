<?php

namespace Drupal\metatag_twitter_cards\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;

/**
 * The Twitter Cards gallery image1 metatag.
 *
 * @MetatagTag(
 *   id = "twitter_cards_gallery_image1",
 *   label = @Translation("2nd gallery image"),
 *   description = @Translation("A URL to the image representing the second photo in your gallery."),
 *   name = "twitter:gallery:image1",
 *   group = "twitter_cards",
 *   weight = 201,
 *   type = "image",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   absolute_url = TRUE
 * )
 *
 * @deprecated in metatag:8.x-1.23 and is removed from metatag:2.0.0. No replacement is provided.
 *
 * @see https://www.drupal.org/node/3329072
 */
class TwitterCardsGalleryImage1 extends MetaNameBase {
}
