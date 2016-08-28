<!DOCTYPE html>
<html>
<head>
<title>Nysc Diary|photo gallery</title>
<?php echo $css;?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/set-gallery-images.css';  ?>">
<style type="text/css">


 
    input.star
     { 
    display: none; 
    }
    label.star 
    {
      float: right;
      padding: 10px;
      font-size: 18px;
    color: #FF464F;
      transition: all .2s;
    }
    input.star:checked ~ label.star:before 
    {
      content: '\f005';
      color: #F62;
      transition: all .25s;
    }
    input.star-5:checked ~ label.star:before 
    {
      color: #fd2;
      text-shadow: 0 0 10px #952;
    }
    input.star-1:checked ~ label.star:before 
    { 
    color: red; 
    }
    label.star:hover 
    { 
    transform: rotate(-15deg) scale(1.3); 
    }
    label.star:before
    {
      content: '\f006';
      font-family: FontAwesome;
    }

  
.grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  margin: 0;  /*change here for spacing*/
  width: 33.333333333%;
  text-align: center;
  cursor: pointer !important;
}

.grid figure img {
  position: relative;
  display: block;
  max-width: 102%;
  opacity: 1;
}

.grid figure figcaption {
  padding: 2em;
  color: #fff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
  pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
}

.grid figure h2 {
  word-spacing: -0.15em;
  font-size: 50px;
  font-weight: 700;
}

.grid figure h2,
.grid figure p {
  margin: 0;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 68.5%;
}

 .post { 
  width: 500px; 
}
#demo-scroll{
  max-height: 100%;
  overflow: scroll;
}
  /*  #gallery-display{
      height: 400px;
    }*/

/*---------------*/
/***** Oscar *****/
/*---------------*/

figure.effect-oscar {
/*  background: -webkit-linear-gradient(45deg, #22682a 0%, #9b4a1b 40%, #3a342a 100%);
  background: linear-gradient(45deg, #22682a 0%,#9b4a1b 40%,#3a342a 100%);*/
}

/*figure.effect-oscar img {
  opacity: 0.9;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}
*/
figure.effect-oscar figcaption {
  padding: 15%;
/*  background-color: rgba(58,52,42,0.7);
  -webkit-transition: background-color 0.35s;
  transition: background-color 0.35s;*/
}

figure.effect-oscar figcaption::before {
  position: absolute;
  top: 30px;
  right: 30px;
  bottom: 30px;
  left: 30px;
  border: 1px solid #fff;
  content: '';
}

figure.effect-oscar h2 {
  margin: 0;
  line-height: 1em;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

figure.effect-oscar figcaption::before,
figure.effect-oscar p {
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0);
  transform: scale(0);
}

figure.effect-oscar:hover h2 {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-oscar:hover figcaption::before,
figure.effect-oscar:hover p {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}

figure.effect-oscar:hover figcaption {
  background-color: rgba(0,0,0,0.8);
}

figure.effect-oscar:hover img {
  opacity: 0.4;
}

#works figcaption a {
    border: 1px solid #fff;
    margin-top: 1em;
    display: inline-block;
    color: #fff;
    padding: 0 2em;
    font-size: 12px !important;
    transition: all 0.3s ease-in-out;
    outline: none !important;
    letter-spacing: 1px;
    box-sizing: border-box;
}
.grid figcaption p {
    letter-spacing: 1px;
    font-size: 12px !important;
    line-height: 1.7em;
}






</style>
<script type="text/javascript">
  $(function(){
    $("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
    $(".post").wrap("<td></td>");
    $("#gallery-display").mousewheel(function(event, delta) {
      this.scrollLeft -= (delta * 30);
       event.preventDefault();
    });   
  });
</script>
</head>
<body>
 <?php echo $header; ?>
<div class="container">
  <div class="row">
    
<div class="col col-md-12">
     
<h2>Our photo gallery</h2><HR>
 <div class=" clearfix grid">
 <section id="gallery-display"> 
  <div id="page-wrap">
    <div class="post">
         <figure class="effect-oscar  wowload fadeInUp">
        <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/1.jpg'; ?>">
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/1.jpg'; ?>">View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/2.jpg'; ?>">
        <figcaption>
            <h2>Events</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/2.jpg'; ?>">View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/3.jpg'; ?>">
        <figcaption>
            <h2>music</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/3.jpg'; ?>">View more</a></p>            
        </figcaption>
    </figure>
    </div>
    <div class="post">
     <figure class="effect-oscar  wowload fadeInUp">
        <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/4.jpg'; ?>">
        <figcaption>
            <h2>Vintage</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/4.jpg'; ?>">View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/5.jpg'; ?>">
        <figcaption>
            <h2>Typers</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/5.jpg'; ?>">View more</a></p>            
        </figcaption>
    </figure>     
    <figure class="effect-oscar  wowload fadeInUp">
        <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/6.jpg'; ?>">
        <figcaption>
            <h2>hotel</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/6.jpg'; ?>">View more</a></p>            
        </figcaption>
    </figure>
    </div> 
   <div class="post">
        <figure class="effect-oscar  wowload fadeInUp">
           <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/7.jpg'; ?>">
            <figcaption>
                <h2>Chinese</h2>
                <p>Lily likes to play with crayons and pencils<br>
                <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/7.jpg'; ?>">View more</a></p>            
            </figcaption>
       </figure>
      <figure class="effect-oscar  wowload fadeInUp">
          <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/8.jpg'; ?>">
          <figcaption>
              <h2>Dicrap</h2>
              <p>Lily likes to play with crayons and pencils<br>
              <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/8.jpg'; ?>">View more</a></p>            
          </figcaption>
      </figure>
      <figure class="effect-oscar  wowload fadeInUp">
          <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/9.jpg'; ?>">
          <figcaption>
              <h2>Coffee</h2>
              <p>Lily likes to play with crayons and pencils<br>
              <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/9.jpg'; ?>">View more</a></p>            
          </figcaption>
      </figure>
      </div>
      <div class="post">
      <figure class="effect-oscar  wowload fadeInUp">
          <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/10.jpg'; ?>">
          <figcaption>
              <h2>cameras</h2>
              <p>Lily likes to play with crayons and pencils<br>
              <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/10.jpg'; ?>">View more</a></p>            
          </figcaption>
      </figure>
      <figure class="effect-oscar  wowload fadeInUp">
          <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/11.jpg'; ?>">
          <figcaption>
              <h2>design</h2>
              <p>Lily likes to play with crayons and pencils<br>
              <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/11.jpg'; ?>">View more</a></p>            
          </figcaption>
      </figure>
      <figure class="effect-oscar  wowload fadeInUp">
          <img alt="img01" src="<?php echo base_url().'assets/images/portfolio/12.jpg'; ?>">
          <figcaption>
              <h2>studio</h2>
              <p>Lily likes to play with crayons and pencils<br>
              <a data-gallery="" title="1" href="<?php echo base_url().'assets/images/portfolio/12.jpg'; ?>">View more</a></p>            
          </figcaption>
      </figure>        
     </div>
      <div class="post">
      <h2>Post Title Example Two</h2>
      <p>By <a href="http://css-tricks.com"><strong>CSS</strong>-Tricks</a></p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse aliquet arcu a ipsum. Nunc arcu est, pulvinar vitae, consectetuer ac, pellentesque interdum, augue. Fusce iaculis nulla et sapien. Aliquam erat volutpat. Etiam iaculis turpis nec libero. Nam adipiscing ullamcorper quam. Pellentesque erat. Sed hendrerit. Duis id nisl. Cras arcu mauris, mollis vel, convallis non, elementum a, tortor. Donec ac est eget elit consequat sollicitudin. In id odio quis tortor volutpat mollis. Nulla iaculis lobortis est. Pellentesque in elit vitae nulla tempus euismod. Nam non erat in lacus rutrum malesuada. Donec commodo purus sed quam posuere eleifend. Nam accumsan.</p>
    </div>
     <div class="post">
      <h2>Post Title Example Two</h2>
      <p>By <a href="http://css-tricks.com"><strong>CSS</strong>-Tricks</a></p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse aliquet arcu a ipsum. Nunc arcu est, pulvinar vitae, consectetuer ac, pellentesque interdum, augue. Fusce iaculis nulla et sapien. Aliquam erat volutpat. Etiam iaculis turpis nec libero. Nam adipiscing ullamcorper quam. Pellentesque erat. Sed hendrerit. Duis id nisl. Cras arcu mauris, mollis vel, convallis non, elementum a, tortor. Donec ac est eget elit consequat sollicitudin. In id odio quis tortor volutpat mollis. Nulla iaculis lobortis est. Pellentesque in elit vitae nulla tempus euismod. Nam non erat in lacus rutrum malesuada. Donec commodo purus sed quam posuere eleifend. Nam accumsan.</p>
    </div>
     <div class="post">
      <h2>Post Title Example Two</h2>
      <p>By <a href="http://css-tricks.com"><strong>CSS</strong>-Tricks</a></p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse aliquet arcu a ipsum. Nunc arcu est, pulvinar vitae, consectetuer ac, pellentesque interdum, augue. Fusce iaculis nulla et sapien. Aliquam erat volutpat. Etiam iaculis turpis nec libero. Nam adipiscing ullamcorper quam. Pellentesque erat. Sed hendrerit. Duis id nisl. Cras arcu mauris, mollis vel, convallis non, elementum a, tortor. Donec ac est eget elit consequat sollicitudin. In id odio quis tortor volutpat mollis. Nulla iaculis lobortis est. Pellentesque in elit vitae nulla tempus euismod. Nam non erat in lacus rutrum malesuada. Donec commodo purus sed quam posuere eleifend. Nam accumsan.</p>
    </div>
     <div class="post">
      <h2>Post Title Example Two</h2>
      <p>By <a href="http://css-tricks.com"><strong>CSS</strong>-Tricks</a></p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse aliquet arcu a ipsum. Nunc arcu est, pulvinar vitae, consectetuer ac, pellentesque interdum, augue. Fusce iaculis nulla et sapien. Aliquam erat volutpat. Etiam iaculis turpis nec libero. Nam adipiscing ullamcorper quam. Pellentesque erat. Sed hendrerit. Duis id nisl. Cras arcu mauris, mollis vel, convallis non, elementum a, tortor. Donec ac est eget elit consequat sollicitudin. In id odio quis tortor volutpat mollis. Nulla iaculis lobortis est. Pellentesque in elit vitae nulla tempus euismod. Nam non erat in lacus rutrum malesuada. Donec commodo purus sed quam posuere eleifend. Nam accumsan.</p>
    </div>
   </div>
   </section>      
  </div>
  </div>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
      <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

          <!-- Background of PhotoSwipe. 
               It's a separate element, as animating opacity is faster than rgba(). -->
          <div class="pswp__bg"></div>

          <!-- Slides wrapper with overflow:hidden. -->
          <div class="pswp__scroll-wrap">

              <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
              <!-- don't modify these 3 pswp__item elements, data is added later on. -->
              <div class="pswp__container">
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
              </div>

              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
              <div class="pswp__ui pswp__ui--hidden">

                  <div class="pswp__top-bar">

                      <!--  Controls are self-explanatory. Order can be changed. -->

                      <div class="pswp__counter"></div>

                      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                      <button class="pswp__button pswp__button--share" title="Share"></button>

                      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                      <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                      <!-- element will get class pswp__preloader--active when preloader is running -->
                      <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                      </div>
                  </div>

                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                      <div class="pswp__share-tooltip"></div> 
                  </div>

                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                  </button>

                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                  </button>

                  <div class="pswp__caption">
                      <div class="pswp__caption__center"></div>
                  </div>

                </div>

              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
<!-- All JavaScript files
    ================================================== -->
    <script src="<?php echo base_url().'assets/js/jquery-1.11.3.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>

    <!-- Plugins for this tblockquoteplate -->
    <script src="<?php echo base_url().'assets/js/jquery.lwtCountdown-1.0.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/classie.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'; ?>"></script>

    <!-- Custom script for this tblockquoteplate -->
    <script src="<?php echo base_url().'assets/js/blog-script.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/common-script.js'; ?>"></script>
    <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-ddaa1eeb67d762ab8aad46508017908c.js"></script>

    <script src='<?php echo base_url().'assets/js/photoswipe.min.js'; ?>'></script>
    <script src='<?php echo base_url().'assets/js/photoswipe-ui-default.min.js'; ?>'></script>
    <script type="text/javascript">
               var initPhotoSwipeFromDOM = function(gallerySelector) {

              // parse slide data (url, title, size ...) from DOM elements 
              // (children of gallerySelector)
              var parseThumbnailElements = function(el) {
                  var thumbElements = el.childNodes,
                      numNodes = thumbElements.length,
                      items = [],
                      figureEl,
                      linkEl,
                      size,
                      item;

              for(var i = 0; i < numNodes; i++) 
                  {

                      figureEl = thumbElements[i]; // <figure> element

                      // include only element nodes 
                      if(figureEl.nodeType !== 1) {
                          continue;
                      }

                      linkEl = figureEl.children[0]; // <a> element

                      size = linkEl.getAttribute('data-size').split('x');

                      // create slide object
                      item = {
                          src: linkEl.getAttribute('href'),
                          w: parseInt(size[0], 10),
                          h: parseInt(size[1], 10)
                      };



                      if(figureEl.children.length > 1) {
                          // <figcaption> content
                          item.title = figureEl.children[1].innerHTML; 
                      }

                      if(linkEl.children.length > 0) {
                          // <img> thumbnail element, retrieving thumbnail url
                          item.msrc = linkEl.children[0].getAttribute('src');
                      } 

                      item.el = figureEl; // save link to element for getThumbBoundsFn
                      items.push(item);
                  }

                  return items;
              };

              // find nearest parent element
              var closest = function closest(el, fn) {
                  return el && ( fn(el) ? el : closest(el.parentNode, fn) );
              };

              // triggers when user clicks on thumbnail
              var onThumbnailsClick = function(e) {
                  e = e || window.event;
                  e.preventDefault ? e.preventDefault() : e.returnValue = false;

                  var eTarget = e.target || e.srcElement;

                  // find root element of slide
                  var clickedListItem = closest(eTarget, function(el) {
                      return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                  });

                  if(!clickedListItem) {
                      return;
                  }

                  // find index of clicked item by looping through all child nodes
                  // alternatively, you may define index via data- attribute
                  var clickedGallery = clickedListItem.parentNode,
                      childNodes = clickedListItem.parentNode.childNodes,
                      numChildNodes = childNodes.length,
                      nodeIndex = 0,
                      index;

                  for (var i = 0; i < numChildNodes; i++) {
                      if(childNodes[i].nodeType !== 1) { 
                          continue; 
                      }

                      if(childNodes[i] === clickedListItem) {
                          index = nodeIndex;
                          break;
                      }
                      nodeIndex++;
                  }



                  if(index >= 0) {
                      // open PhotoSwipe if valid index found
                      openPhotoSwipe( index, clickedGallery );
                  }
                  return false;
              };

              // parse picture index and gallery index from URL (#&pid=1&gid=2)
              var photoswipeParseHash = function() {
                  var hash = window.location.hash.substring(1),
                  params = {};

                  if(hash.length < 5) {
                      return params;
                  }

                  var vars = hash.split('&');
                  for (var i = 0; i < vars.length; i++) {
                      if(!vars[i]) {
                          continue;
                      }
                      var pair = vars[i].split('=');  
                      if(pair.length < 2) {
                          continue;
                      }           
                      params[pair[0]] = pair[1];
                  }

                  if(params.gid) {
                      params.gid = parseInt(params.gid, 10);
                  }

                  return params;
              };

              var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                  var pswpElement = document.querySelectorAll('.pswp')[0],
                      gallery,
                      options,
                      items;

                  items = parseThumbnailElements(galleryElement);

                  // define options (if needed)
                  options = {

                      // define gallery index (for URL)
                      galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                      getThumbBoundsFn: function(index) {
                          // See Options -> getThumbBoundsFn section of documentation for more info
                          var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                              pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                              rect = thumbnail.getBoundingClientRect(); 

                          return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                      }

                  };

                  // PhotoSwipe opened from URL
                  if(fromURL) {
                      if(options.galleryPIDs) {
                          // parse real index when custom PIDs are used 
                          // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                          for(var j = 0; j < items.length; j++) {
                              if(items[j].pid == index) {
                                  options.index = j;
                                  break;
                              }
                          }
                      } else {
                          // in URL indexes start from 1
                          options.index = parseInt(index, 10) - 1;
                      }
                  } else {
                      options.index = parseInt(index, 10);
                  }

                  // exit if index not found
                  if( isNaN(options.index) ) {
                      return;
                  }

                  if(disableAnimation) {
                      options.showAnimationDuration = 0;
                  }

                  // Pass data to PhotoSwipe and initialize it
                  gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
                  gallery.init();
              };

              // loop through all gallery elements and bind events
              var galleryElements = document.querySelectorAll( gallerySelector );

              for(var i = 0, l = galleryElements.length; i < l; i++) {
                  galleryElements[i].setAttribute('data-pswp-uid', i+1);
                  galleryElements[i].onclick = onThumbnailsClick;
              }

              // Parse URL and open gallery if it contains #&pid=3&gid=1
              var hashData = photoswipeParseHash();
              if(hashData.pid && hashData.gid) {
                  openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
              }
          };

          // execute above function
          initPhotoSwipeFromDOM('.my-gallery');
   </script>
</body>
</html>