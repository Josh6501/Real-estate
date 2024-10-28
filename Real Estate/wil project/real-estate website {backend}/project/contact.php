<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'Message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'Message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->
<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>Get In Touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="Enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="Enter your number" class="box">
         <textarea name="message" placeholder="Enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="Send message" name="send" class="btn">
      </form>
   </div>

</section>
<!-- contact section ends -->

<!-- faq section starts  -->
<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>How to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p><b>Log into Your Account</b><br>
                  Go to the real estate website and sign in to your account where you made the booking.<br>
            <b>Go to the Booked Property</b><br>
                  Navigate to the Property for which u made a booking and find the Seller's phone number.<br>
            <b>Contact the Seller</b><br>
                  Call the Seller and explain as to why you wish to cancel the booking. Once explained and the Seller accepts, the Seller will cancel the booking.<br>
            <b>Contact the Agent Directly</b><br>
                  If you're unable to cancel online or need help, contact the real estate agent directly via phone or email. They can assist in canceling the appointment or booking.</p>
      </div>

      <div class="box active">
         <h3><span>When will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p><b>Type of Transaction</b><br>
            If it is a <b>purchase</b> of a real estate property, possession usually happens at <b>closing</b>, which is when all payments have been made, contracts are signed, and the title is transferred. This could take anywhere from 30 to 90 days or more.<br>
            <b>Construction Status</b><br>
            If you are purchasing a property that is <b>under construction</b>, possession depends on the <b>construction completion</b> timeline and the developer's schedule. Delays may occur due to weather, permit issues, or other factors.<br>
            <b>Possession Date in Agreement</b><br>
            Check the <b>sale agreement</b> or <b>lease agreement</b> for a specific possession date. This date is usually outlined in the contract you sign with the seller or developer.</p>
      </div>

      <div class="box">
         <h3><span>Where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p><b>Online Payment Portals:</b><br>
                  Many landlords and property management companies use online platforms where tenants can pay rent.<br>
            <b>Direct Bank Transfer</b><br>
                  This would involve transferring money directly from your bank account to the landlord's bank account.<br>
            <b>Cash Payments</b><br>
                  Some landlords accept <b>cash</b>, though this is less common.<br>
            <b>In-person Payments</b><br>
                  If your property management office is local, they may accept <b>in-person payments</b> via check, cash, or card.<br>
            <b>Mobile Payment Apps</b><br>
                  Some landlords or property managers accept payments via mobile payment apps.<br>
            <b>Through a Real Estate Agent</b></p>
      </div>

      <div class="box">
         <h3><span>How to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p><b>Phone Calls</b><br>
                  If you have a buyer's contact number, give them a call to discuss their interest and any questions they may have.<br>
            <b>Text Messages/WhatsApp</b><br>
                  Some buyers prefer quick communication via SMS or WhatsApp.<br>
            <b>Real Estate Platforms</b><br>
                  If a buyer contacted you via real estate platforms, respond promptly.<br>
            <b>Social Media</b><br>
                  Use platforms like Facebook, Instagram, or LinkedIn to contact buyers who have shown interest in your property or follow your real estate page.<br>
            <b>Real Estate Agents or Brokers</b><br>
                  If you are working through a <b>real estate agent</b>, they will handle the communication with the buyers.</p>
      </div>

      <div class="box">
         <h3><span>Why is my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p><b>Database Connection Problems</b><br>
            If your website is pulling listings from a database, there could be an issue with the database connection or query.<br>
            <b>Cache Issues</b><br>
            Your site might be displaying cached content. Clearing the cache on your website or browser could resolve this.<br>
            <b>Backend Approval</b><br>
            If your platform requires admin approval for listings to go live, check if it is waiting for review.</p>
      </div>

      <div class="box">
         <h3><span>How to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p><b>High-Quality Photos</b><br>
                  Use professional photography to showcase the property in the best light.<br>
            <b>Compelling Listing Description</b><br>
                  Write a detailed and engaging description.<br>
            <b>Social Media Marketing</b><br>
                  Promote your listing on Facebook, Instagram, and LinkedIn.<br>
            <b>Leverage Online Reviews</b><br>
                  Encourage your current clients to leave positive reviews.</p>
      </div>

   </div>

</section>
<!-- faq section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>