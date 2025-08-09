<style>
    .video-embed {
        width: 700px;
        height: 250px;
        min-height: 500px;
        margin-left: 50px;
    }
</style>
<section data-testid="dualcontentzone" class="section1">
    <div class="row align-items-center">
        <!-- Video Column -->
        <div class="col-md-6">
            <div class="arrival_bg_box">
                <iframe
                    src="https://www.youtube.com/embed/qzp33k3wJvY?autoplay=0&controls=1&rel=0&showinfo=0&modestbranding=1"
                    title="University SDA Church Welcome Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="video-embed">
                </iframe>
            </div>
        </div>
        <!-- Text Column -->
        <div class="col-md-6">
            <div class="text-area7 bg text-left text-black">
                <div class="spacer-wrapper pt-very_relaxed"></div>
                <h4 class="heading3 text-section_header3 mb-relaxed">
                    You’re Welcome Here!
                </h4>
                <div class="rich-text3 text-paragraph_large mb-relaxed" data-testid="lc-rich-text-component">
                    <p>
                        University SDA.Church is one church meeting in multiple locations, and we want to help you
                        become the
                        person God made you to be. No matter where you are in your journey, you’re invited to discover
                        your purpose and live it out at University SDA.Church.
                    </p>
                </div>

                <div class="btn-box">
                    <a href="{{ route('register') }}" class="btn3">
                        What to Expect
                    </a>
                    <a href="{{ route('register') }}" class="btn4">
                        <i class="fa-solid fa-location-dot"></i>&nbsp;Find a Location
                    </a>
                </div>
                <div class="spacer-wrapper pt-normal"></div>
            </div>
        </div>
    </div>
</section>