<!-- Text and Image Combined Column -->
<div class="col-md-7 position-relative">
  <div class="slider_bg_box position-relative w-100 h-100">
    <img src="images/happy-woman1.jpg" alt="Happy Woman" class="w-100 h-100 object-fit-cover" />

    <!-- Optional Overlay for better text readability -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4); z-index: 1;"></div>

    <!-- Text Inside Image -->
    <div class="text-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start p-4" style="z-index: 2; color: white;">
      <h4 class="heading3 text-section_header mb-relaxed">Need A Prayer?</h4>
      <div class="rich-text3 text-paragraph_large mb-relaxed" data-testid="lc-rich-text-component">
        <p>
          There are times when life is overwhelming, and all we have are questions. In those moments,
          hope can feel far away. The great thing about prayer is that it shifts our perspective
          toward the One who stands ready to listen. No matter what you’re facing, we’d love to pray
          with you!
        </p>
      </div>

      <div class="btn-box3 mt-2">
        <a href="{{ route('register') }}" class="btn4">
          <i class="fa-solid fa-hands-praying"></i>&nbsp;Ask for prayer
        </a>
      </div>
    </div>
  </div>
</div>
