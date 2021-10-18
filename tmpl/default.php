<?php
/**
 * @package    M.S. Testimony Module
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Access to module parameters
$domain = $params->get('domain', 'https://rioguides.biz');
// Load the smart search component language file.
$lang = $app->getLanguage();
$lang->load('mod_mstestimony', JPATH_SITE);
?>

<div class="testimonial-title">
    <h2><?php echo Text::_('MOD_MSTESTIMONY_LAS_MUJERES'); ?></h2>
</div>
<div class="testimonial-container">
  <div class="testimonial-item">
    <div class="testimonial-image-container">
      <img class="testimonial-image" src="https://marielaspoltore.com/images/testemonial_florencia_massacessi_240.jpg"
        alt="Florencia Massacessi">
    </div>
    <span class="testimonial-icon-top fas fa-quote-right fa-3x"> </span>
    <p><?php echo Text::_('MOD_MSTESTIMONY_LA_SANACION'); ?></p>
    <div class="testimonial-byhand byhand">Florencia Massacessi</div>
    <div class="testimonial-icon fas fa-map-marker-alt"><span class="testimonial-place"> California (EEUU)</span></div>
    <div><img class="testimonial_image_2" src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png" alt="Flower"></div>
  </div>
  <div class="testimonial-item">
    <div class="testimonial-image-container">
      <img class="testimonial-image" src="https://marielaspoltore.com/images/testemonial_laura_pomilio_240.jpg"
        alt="Laura Pomilio">
    </div>
    <span class="testimonial-icon-top fas fa-quote-right fa-3x"> </span>
    <p><?php echo Text::_('MOD_MSTESTIMONY_LA_TERAPIA'); ?></p>
    <div class="testimonial-byhand byhand">Laura Pomilio</div>
    <div class="testimonial-icon fas fa-map-marker-alt"><span class="testimonial-place"> Puerto Iguazú (Arg)</span></div>
    <div><img class="testimonial_image_2" src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png" alt="Flower"></div>
  </div>
  <div class="testimonial-item">
    <div class="testimonial-image-container">
      <img class="testimonial-image" src="https://marielaspoltore.com/images/testemonial_laura_lattanzi_240.jpg"
        alt="Laura Lattanzi">
    </div>
    <span class="testimonial-icon-top fas fa-quote-right fa-3x"> </span>
    <p><?php echo Text::_('MOD_MSTESTIMONY_COMENCE_A_T'); ?></p>
    <div class="testimonial-byhand byhand">Laura Lattanzi</div>
    <div class="testimonial-icon fas fa-map-marker-alt"><span class="testimonial-place"> Santiago (Chile)</span></div>
    <div><img class="testimonial_image_2" src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png" alt="Flower"></div>
  </div>
</div>