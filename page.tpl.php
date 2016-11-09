<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
<hr class="hidden" />
<!-- The following div contains the Cornell University logo with unit signature -->
<div id="cu-identity">
  <div id="cu-logo"><a id="insignia-link" href="http://www.cornell.edu/"><img src="<?php print $base_path; ?><?php print(drupal_get_path('theme', 'webvision')); ?>/images/unit_signature_unstyled.gif" border="0" alt="Cornell University" width="283" height="75" /></a>
    <div id="unit-signature-links"><a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a> <a id="unit-link" href="http://www.library.cornell.edu">Library</a></div>
  </div>
  <!--  The search-form div contains a form that allows the user to search  either the unit website or all of cornell.edu directly from the banner. -->
 
</div>
<!-- The header div contains the main identity and main navigation for the site -->
<div id="header">
  <!--    
    The navigation div contains the site's main navigation. These
      links will be displayed in a horizontal, gray navigation bar
    under the unit signature banner.
  -->
  <div id="navigation">
 <?php print render($page['navbar']); ?>
  </div>
  <hr class="hidden" />
</div>
 <!--    
    end header
  -->

<hr class="hidden" />
<div id="wrap">
  <!-- The content div contains the main content of the page -->
  <div id="content">
    <div id="main">
      <div class="masthead">

            
        <div class="banner" id="banner-image">
            <?php if ($title): ?>
            <h1 class="sitename"><?php print $title; ?></h2>
        <?php endif; ?>
                            <div id="research-menu">
                              <?php print render($page['research_menu']); ?>
                            </div>
           <?php print render($page['masthead']); ?>
            </div>
           </div>                 




                        


<div>

  
</div>
        
            
            
    
            
           
      <!-- content goes here -->
      <a href="#maincontent"></a>
    <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
      

        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        
        <?php if(!empty($page['content'])) : ?>

          <?php if(drupal_is_front_page()) {
              unset($page['content']['system_main']['default_message']);
            }?>

          <?php print render($page['content']); ?>
 </div>
     
    <?php endif; ?>
            
    
      
  
    
    
    
</div>
<hr class="hidden" />
<div id="footer">
  <div id="footer-content"> 
               <?php print render($page['footer']); ?>

      <?php if ($logged_in) { ?>
    <a href="/logout">Logout</a>
    <?php } else { ?>
    <a href="/user">Staff Login</a>
    <?php } ?>
  <div><a href="copyrightstatement">&copy;<?php echo date('Y'); ?></a> | Cornell University Library, Ithaca NY 14853 | 607-255-4144</div>
  </div>


    </div>
 
</div>


