<footer id="footer">
  <div>
    <div class="content overflow">
      <p>联系我们<span>contact us</span></p>
      <div class="main clearfix">
        <div class="footer-left">
          <div>
            <p>Hotline：{{ $contact->phone }}</p>
            <p>E-mail：{{ $contact->email }}</p>
            <p>Adress：{{ $contact->address }}</p>
          </div>
        </div>
        <div class="footer-right">
          <div class="overflow">
            <p><img src="/static/images/contact-logo.png" alt=""></p>
            <p>
              <img src="/static/images/en-slogan.png" alt="">
            </p>
            <p>{{ $contact->slogan }}</p>
            <p>
              <!-- 加上viewbox属性后报错?百度一下viewbox -->
              <svg width="90" height="2" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <line x1="0" y1="1" x2="30" y2="1" stroke="#fff" stroke-width="2"/>
                <line x1="30" y1="1" x2="60" y2="1" stroke="#f89400" stroke-width="2"/>
                <line x1="60" y1="1" x2="90" y2="1" stroke="#197463" stroke-width="2"/>
              </svg>
            </p>
          </div>
          <div>
            <img src="/static/images/contact-code.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>