<?php get_header(); ?>

<div class="hero">
        <div class="container row">
          <div class="primary__content col">
            <h1 class="hero__title">Build The Community Your Fans Will Love</h1>
            <p class="hero__content">
              Huddle re-imagines the way we build communities. You have a voice,
              but so does your audience. Create connections with your users as you
              engage in genuine discussion.
            </p>

            <div class="cta">
              <input
                class="cta--btn"
                type="button"
                value="Get Started for free"
              />
            </div>
          </div>

          <div class="secondary__content col">
            <img
              src="<?php echo get_theme_file_uri('/images/illustration-mockups.svg') ?>"
              alt="Hero Image of Huddle"
            />
          </div>
        </div>
      </div>
    </div>  
    <!-- Main Section -->
    <main>
      <section class="grow">
        <div class="container row">
            <div class="section__secondary col">
              <img
                class="section__image"
                src="<?php echo get_theme_file_uri('/images/illustration-mockups.svg') ?>"
                alt="Grow" 
              />
            </div>

              <div class="section__primary col">
                <h4 class="section__title">
                  Grow Together
                </h4>

                <p class="section__content">
                  Generate meaningful discussions with your audience and build a
                  strong, loyal community. Think of the insightful conversations you
                  miss out on with a feedback form.
                </p>
              </div>
            </div>
      </section>

      <section class="flow">
        <div class="container row">
          <div class="section__secondary col">
            <img
              class="section__image"
              src="<?php echo get_theme_file_uri('/images/illustration-flowing-conversation.svg'); ?>"
              alt="Flow"
            />
          </div>


          <div class="section__primary col">
            <h4 class="section__title">
              Flowing Conversations
            </h4>

            <p class="section__content">
              You wouldn't paginate a conversation in real life, so why do it
              online? Our threads have just-in-time loading for a more natural
              flow.
            </p>
          </div>
        </div>
      </section>

      <section class="users">
        <div class="container row">
          <div class="section__secondary col">
            <img
              class="section__image"
              src="<?php echo get_theme_file_uri('/images/illustration-your-users.svg'); ?>"
              alt="Users" 
            />
          </div>

            <div class="section__primary col">
              <h4 class="section__title">
                Your Users
              </h4>

              <p class="section__content">
                It takes no time at all to integrate Huddle with your app's
                authentication solution. This means, once signed in to your app,
                your users can start chatting immediately.
              </p>
            </div> 
          </div>
      </section>
    </main>

    <!-- Form Section -->
    <div class="container">
      <div class="form">
          <h4 class="form__title">
            Ready to build your community
          </h4>
        <div class="cta__form"> 
          <input class="cta--btn" type="button" value="Get Started for free" />
        </div> 
      </div>
    </div>


<?php get_footer(); ?>