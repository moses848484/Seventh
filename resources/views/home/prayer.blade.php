<style>
    .video-container {
        position: relative;
        width: 100%;
        max-width: 1000px;
        /* fixed max size */
        margin: auto;
        padding-bottom: 56.25%;
        /* 16:9 ratio */
        height: 0;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<section data-testid="dualcontentzone" class="section1">
    <div class="row align-items-center">
        <!-- Video Column -->
        <div class="col-md-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/qzp33k3wJvY" frameborder="0" allowfullscreen></iframe>
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
                    <a href="{{ url('what-to-expect') }}" class="btn3">
                        What to Expect
                    </a>
                </div>
                <div class="spacer-wrapper pt-normal"></div>
            </div>
        </div>
    </div>
</section>