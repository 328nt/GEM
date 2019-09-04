<section id="news" class="vc_row wpb_row vc_row-fluid vc_custom_1483698151404">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <div class="custom-header">
          <h2 class="text-center" style="color:;">TIN TỨC</h2>
        </div>
        <div class="section-content">
          <div class="card-deck px-5 ">
            @foreach($news as $new)
            <div class="col-md-3 card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
              <img class="card-img-top" width="100%" height="150px" src="upload/news/{{ $new->image }}">
              <div class="card-body">
                <a href="news/{{$new->id}}/{{$new->titlenone}}.html">
                  <h5 style="height: 30px;" class="card-title blue-text">{{ $new->title }}</h5>
                </a>
                <small class="text-muted">Posted {{ Carbon\Carbon::parse($new->created_at)->diffForHumans() }}</small>
                <p class="card-text">{!! substr($new->description,0,100) !!}...</p>
              </div>
            </div>
            @endforeach
          </div>
          <hr>
          <div style="text-align: center;">{{ $news->links() }}</div>
        </div>
        <div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1523795740786 vc_row-has-fill">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
              <div class="wpb_wrapper">
                <!-- vc_grid start -->
                <div class="vc_grid-container-wrapper vc_clearfix">
                  <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid"
                    data-initial-loading-animation="fadeIn"
                    data-vc-grid-settings="{&quot;page_id&quot;:24,&quot;style&quot;:&quot;pagination&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1530878100650-dff3044c-69ad-9&quot;,&quot;items_per_page&quot;:&quot;4&quot;,&quot;auto_play&quot;:false,&quot;gap&quot;:30,&quot;speed&quot;:-1000,&quot;loop&quot;:&quot;&quot;,&quot;animation_in&quot;:&quot;&quot;,&quot;animation_out&quot;:&quot;&quot;,&quot;arrows_design&quot;:&quot;none&quot;,&quot;arrows_color&quot;:&quot;blue&quot;,&quot;arrows_position&quot;:&quot;inside&quot;,&quot;paging_design&quot;:&quot;radio_dots&quot;,&quot;paging_color&quot;:&quot;grey&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}"
                    data-vc-request="http://surfstartupwave.vn/wp-admin/admin-ajax.php" data-vc-post-id="24"
                    data-vc-public-nonce="8835ea9ad0">
                  </div>
                </div><!-- vc_grid end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>