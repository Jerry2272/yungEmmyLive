<?php


/**
 * 
 * Name:About Archive
 * Template Name:contact */

//get posts
?>
<?php get_header(); ?>

<style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      #form{
        /* width: 40%; */
        /* display: flex; */
        /* align-items: center; */
        padding: 8px;

      }
    #form  input , textarea {
       width: 100%;
       padding: 10px;
        background: transparent;
      }
      #form h2{
        background:  linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6));
        padding: 10px;
        color: #fff;
        margin: 16px 0;
      }
      @media (min-width: 992px) {
        #form{
            position: absolute;
        right: 30px;
        z-index: 999;
        }
      }
    </style>
 
    
        <!-- contact page section  -->
        <div class="container-fluid lg:pt-10 pt-28 lg:h-screen h-auto lg:flex items-center contact">
          <div class="d">
          <div class="lg:pl-28 lg:p-10 p-4 relative">
            <h1 class="text-white font-semibold text-3xl relative" style="z-index: 1;">Connect With Me</h1>
            <h5 class="text-2xl font-normal text-white py-8 lg:w-3/5 relative lg:pr-4" style="z-index: 1;">
                Stay updated with all things Emmy Yung by following us on social media. Connect with us on Instagram, Twitter, Facebook, and more to catch the latest news, behind-the-scenes glimpses, and exclusive content straight from the heart of the music world.
            </h5>
            <div class="social-icons flex content-center items-center relative" style="z-index: 1;">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri (); ?>/assets/instagram.svg" alt="">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri (); ?>/assets/facebook.svg" alt="">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri (); ?>/assets/spotify.svg" alt="">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri (); ?>/assets/twitter.svg" alt="">
                </a>
            </div>
        </div>
        <div class="aboutpage-overlay w-full lg:w-8/12	h-4/5 lg:h-3/5	"></div>
          </div>
            <!-- send message section  -->
        <div class="relative lg:w-2/5" id="form">
        <form id="formId" class="lg:pl-4 lg:ml-6">
            <h2 class=" text-2xl">Send me a message</h2>
        <div class="field">
          <label for="from_name" class="text-white text-center pt-6">Full Name</label>  
          <input type="text" name="from_name" id="from_name" class="w-full bg-transparent border-b-2 border-white outline-none text-white">
        </div>
        <div class="field">
          <label for="phone" class="text-white text-center pt-6">Phone Number</label>
          <input type="phone" name="from_number " id="from_number" class="w-full bg-transparent border-b-2 border-white outline-none text-white">
        </div>
        <div class="field">
          <label for="reply_to" class="text-white text-center pt-6">Email Address</label>
          <input type="email" name="reply_to" id="reply_to" class="w-full bg-transparent border-b-2 border-white outline-none text-white" required>
        </div>
        <div class="field my-3">
          <label for="message" class="text-white text-center pt-6"></label>
          <textarea type="text" name="message" id="message" class="w-full bg-transparent border-b-2 border-white outline-none text-white" placeholder="Write a short message " required>
            </textarea>
        </div>
      
        <button type="submit" id="button" class="my-3 text-center text-white p-3  mx-auto font-bold" style="   background:  linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6));">
            Send Email 
        </button>
      </form>
        </div>
        <!-- send message section ending -->
        </div>
        <!-- contact page section ending -->

        <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
        <script type="text/javascript">
        emailjs.init('tHq0PnqZUyi9_nwMe');


const btn = document.getElementById('button');

document.getElementById('formId')
.addEventListener('submit', function(event) {
event.preventDefault();

btn.value = 'Sending...';

const serviceID = 'service_2xza0tl';
const templateID = 'template_fcqv9ya';

emailjs.sendForm(serviceID, templateID, this)
.then(() => {
btn.value = 'Send Email';
alert('Your message has be sent!');
}, (err) => {
btn.value = 'Send Email';
alert(JSON.stringify(err));
});
});
      </script>


      

