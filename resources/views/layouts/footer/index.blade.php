<footer id="footer" class="footer-wrapper">
   <section class="section vantheweb-footer" id="section_1508992358">
      <div class="bg section-bg fill bg-fill  " >
      </div>
      <div class="section-content relative">
         <div class="row"  id="row-674053816">
         <div id="col-183956952" class="col medium-6 small-12 large-4"  >
               <div class="col-inner text-left"  >
                  <div id="text-775089456" class="text">
                     <p><span style="font-size: 120%;"><strong>THÔNG TIN CÔNG TY</strong></span></p>
                     <style>
                     #text-775089456 {
                     color: rgb(255, 255, 255);
                     }
                     #text-775089456 > * {
                     color: rgb(255, 255, 255);
                     }
                     </style>
                  </div>
                  <div class="is-divider divider clearfix" style="max-width:121px;height:1px;background-color:rgb(245, 245, 245);"></div>
                  <div id="text-4100445215" class="text">
                     <p>{{$setting->company}}</p>
                     <ul>
                     <li>Địa chỉ: {{$setting->address1}}</li>
                     @if ($setting->address2)
                     <li>Địa chỉ 2: {{$setting->address2}}</li>
                     @endif
                     <li>Hotline: <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></li>
                     @if ($setting->phone2)
                     <li>Tel: <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></li>
                     @endif
                     @if ($setting->phone3)
                     <li>Tel: <a href="tel:{{$setting->phone3}}">{{$setting->phone3}}</a></li>
                     @endif
                     <li>E-mail: {{$setting->email}}</li>
                     <li>Website: www.pkcvietnam.com.vn</li>
                     </ul>
                     <style>
                     #text-4100445215 {
                     color: rgb(255, 255, 255);
                     }
                     #text-4100445215 > * {
                     color: rgb(255, 255, 255);
                     }
                     </style>
                  </div>
               </div>
         </div>
         <div id="col-651322132" class="col medium-6 small-12 large-4"  >
               <div class="col-inner text-left"  >
                  <div id="text-920663937" class="text">
                     <p><span style="font-size: 120%;"><strong>GỬI THÔNG TIN LIÊN HỆ</strong></span></p>
                     <style>
                     #text-920663937 {
                     color: rgb(255, 255, 255);
                     }
                     #text-920663937 > * {
                     color: rgb(255, 255, 255);
                     }
                     </style>
                  </div>
                  <div class="is-divider divider clearfix" style="max-width:121px;height:1px;background-color:rgb(245, 245, 245);"></div>
                  <div role="form" class="wpcf7" id="wpcf7-f930-o1" lang="vi" dir="ltr">
                     <div class="screen-reader-response">
                     <p role="status" aria-live="polite" aria-atomic="true"></p>
                     <ul></ul>
                     </div>
                     <form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        @csrf
                        <p><span class="wpcf7-form-control-wrap text-905">
                           <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên" />
                        </span> </p>
                        <p><span class="wpcf7-form-control-wrap email-292">
                           <input type="email" name="Email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" />
                        </span> </p>
                        <p><span class="wpcf7-form-control-wrap text-905">
                           <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" />
                        </span><br />
                              <span class="wpcf7-form-control-wrap textarea-466">
                                 <textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nội dung liên hệ"></textarea>
                              </span>
                        </p>
                        <p><input type="submit" value="Gửi đi" class="wpcf7-form-control has-spinner wpcf7-submit" /></p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                     </form>
                  </div>
               </div>
         </div>
         <div id="col-367823494" class="col medium-12 small-12 large-4"  >
               <div class="col-inner text-left"  >
                  <div id="text-2985962708" class="text">
                     <p><span style="font-size: 120%;"><strong>GOOGLE MAPS</strong></span></p>
                     <style>
                     #text-2985962708 {
                     color: rgb(255, 255, 255);
                     }
                     #text-2985962708 > * {
                     color: rgb(255, 255, 255);
                     }
                     </style>
                  </div>
                  <div class="is-divider divider clearfix" style="max-width:121px;height:1px;background-color:rgb(245, 245, 245);"></div>
                  <p>
                     {!!$setting->iframe_map!!}
                  </p>
               </div>
         </div>
         <style>
               #row-674053816 > .col > .col-inner {
               padding: 30px 0px 0px 0px;
               }
         </style>
         </div>
      </div>
      <style>
         #section_1508992358 {
         padding-top: 0px;
         padding-bottom: 0px;
         }
         #section_1508992358 .section-bg.bg-loaded {
         background-image: url({{url('frontend/images/footer.png')}});
         }
         #section_1508992358 .ux-shape-divider--top svg {
         height: 150px;
         --divider-top-width: 100%;
         }
         #section_1508992358 .ux-shape-divider--bottom svg {
         height: 150px;
         --divider-width: 100%;
         }
      </style>
   </section>
   <div class="absolute-footer dark medium-text-center text-center">
      <div class="container clearfix">
         <div class="footer-primary pull-left">
         <div class="copyright-footer">
               Copyright 2022 © {{$setting->company}} | Design By <a href="https://sbtsoftware.vn/" target="_blank">SBT</a>     
         </div>
         </div>
      </div>
   </div>
   <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline round left hide-for-medium" id="top-link" aria-label="Go to top"><i class="icon-angle-up" ></i></a>
</footer>