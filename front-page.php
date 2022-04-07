
<?php  get_header(); ?> 


<div class="wrraper">


    <section class="hero">
      <div class="hero__left">
        <h1>Bringing the life of productivity</h1>
        <p>Start with being productive instead of busy and lite tomorrow with today !</p>
        <a href="#showing__post">Read Now</a>
      </div>
      <div class="hero__right">
        <img
          src="<?php  echo get_template_directory_uri(); ?>/images/Home.png"
          alt="">
      </div>
    </section>

 </div>

    <section class="home__post wrraper">

      <h2 class="home__post__title">Latest Posts</h2>
      <p class="home__post__describtion">Connect teams, tools, and information so you can execute together, faster.
      </p>

      <div id="showing__post"class="post">


        <div class="post__left">
          <div class="post__left__upper">
            <p>5.21.2021</p>
          </div>
          <div class="post__left__lower">
            <h2>Building a Creative Team That’s Positioned for Growth</h2>
            <div>
              <h3>Posted by</h3>
              <h3>Chris Do</h3>
            </div>
            <p>Business growing pains don't have to be so painful! Join Chris Do and Adam Morgan for this special event,
              sponsored by Adobe Creative Cloud for teams, that will help you create a vision and plan for growing your
              creative team.</p>
            <a href="">Read More ➜
            </a>
          </div>
        </div>




        <div class="post__right">
          <img
            src="https://assets-global.website-files.com/5d816b07d269382588dbcab1/60a6648dee31b9985551f460_thefutur-blog-live-conversation-building-a-creative-dream-team-thats-positioned-for-growth-p-800.jpeg"
            alt="">
        </div>

      </div>


    </section>


    <section class="newsletter wrraper">



      <div class="card">
        <label class="card__icon" for="">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat"
            viewBox="0 0 16 16">
            <path
              d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
          </svg>
        </label>

        <div class="card__content">
          <h3>Suscribe To Over Newsletter</h1>
            <p>its helps you to stay updated
            </p>

            <div class="card__form">
              <input type="text" class="name" placeholder="Name">
              <input type="text" class="email" placeholder="email@exmaple.com">
            </div>
            <div class="card__link"><a href="#">JOIN</a></div>
        </div>
      </div>



    </section>







<?php  get_footer(); ?> 
