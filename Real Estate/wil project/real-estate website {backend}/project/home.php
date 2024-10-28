<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!-- home section starts  -->
<div class="home">

   <section class="center">

      <form action="search.php" method="post">
         <h3>Find your perfect home</h3>
         <div class="box">
            <p>Enter location <span>*</span></p>
            <input type="text" name="h_location" required maxlength="100" placeholder="Enter city name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>Property Type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="flat">Flat</option>
                  <option value="house">House</option>
                  <option value="shop">Shop</option>
               </select>
            </div>
            <div class="box">
               <p>Offer Type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">Sale</option>
                  <option value="resale">Resale</option>
                  <option value="rent">Rent</option>
               </select>
            </div>
            <div class="box">
               <p>Minimum Budget <span>*</span></p>
               <select name="h_min" class="input" required>
                  <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="15000">15k</option>
                  <option value="20000">20k</option>
                  <option value="25000">25k</option>
                  <option value="30000">30k</option>
                  <option value="35000">35k</option>
                  <option value="40000">40k</option>
                  <option value="45000">45k</option>
                  <option value="50000">50k</option>
                  <option value="100000">100K</option>
                  <option value="150000">150K</option>
                  <option value="200000">200K</option>
                  <option value="250000">250K</option>
                  <option value="500000">500K</option>
                  <option value="1000000">1M</option>
                  <option value="2000000">2M</option>
                  <option value="3000000">3M</option>
                  <option value="4000000">4M</option>
                  <option value="5000000">5M</option>
                  <option value="10000000">10M</option>
                  <option value="20000000">20M</option>
                  <option value="30000000">30M</option>
                  <option value="40000000">40M</option>
                  <option value="50000000">50M</option>
                  <option value="100000000">100M</option>
                  <option value="200000000">200M</option>
                  <option value="300000000">300M</option>
                  <option value="400000000">400M</option>
                  <option value="500000000">500M</option>
                  <option value="1000000000">1B</option>
               </select>
            </div>
            <div class="box">
               <p>Maximum Budget <span>*</span></p>
               <select name="h_max" class="input" required>
               <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="15000">15k</option>
                  <option value="20000">20k</option>
                  <option value="25000">25k</option>
                  <option value="30000">30k</option>
                  <option value="35000">35k</option>
                  <option value="40000">40k</option>
                  <option value="45000">45k</option>
                  <option value="50000">50k</option>
                  <option value="100000">100K</option>
                  <option value="150000">150K</option>
                  <option value="200000">200K</option>
                  <option value="250000">250K</option>
                  <option value="500000">500K</option>
                  <option value="1000000">1M</option>
                  <option value="2000000">2M</option>
                  <option value="3000000">3M</option>
                  <option value="4000000">4M</option>
                  <option value="5000000">5M</option>
                  <option value="10000000">10M</option>
                  <option value="20000000">20M</option>
                  <option value="30000000">30M</option>
                  <option value="40000000">40M</option>
                  <option value="50000000">50M</option>
                  <option value="100000000">100M</option>
                  <option value="200000000">200M</option>
                  <option value="300000000">300M</option>
                  <option value="400000000">400M</option>
                  <option value="500000000">500M</option>
                  <option value="1000000000">1B</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="h_search" class="btn">
      </form>

   </section>

</div>
<!-- home section ends -->

<!-- services section starts  -->
<section class="services">

   <h1 class="heading">Our Services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Buy House</h3>
         <p>Find your dream home with our extensive listings. We offer a variety of houses to suit every budget and lifestyle.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Rent House</h3>
         <p>Explore our rental properties to find the perfect place to call home. Flexible lease options and competitive rates available.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Sell House</h3>
         <p>Get the best value for your property with our expert selling services. We make the process quick and hassle-free.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Flats and Buildings</h3>
         <p>Discover a range of flats and buildings that meet your needs. From cozy apartments to spacious commercial spaces.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Shops and Malls</h3>
         <p>Browse our selection of retail spaces, from small shops to large malls. Ideal locations for your business ventures.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 Service</h3>
         <p>Our dedicated team is available around the clock to assist you with all your real estate needs. Contact us at anytime.</p>
      </div>

   </div>

</section>
<!-- services section ends -->

<!-- listings section starts  -->
<section class="listings">

   <h1 class="heading">Latest Listings</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
            <?php
               if($select_saved->rowCount() > 0){
            ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Saved</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>Save</span></button>
            <?php
               }
            ?>
            <div class="thumb">
               <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
               <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
               <div>
                  <p><?= $fetch_user['name']; ?></p>
                  <span><?= $fetch_property['date']; ?></span>
               </div>
            </div>
         </div>
         <div class="box">
            <div class="price"><i class="fa-solid fa-dollar-sign"></i><span><?= $fetch_property['price']; ?></span></div>
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
               <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
               <p><i class="fas fa-bed"></i><span><?= $fetch_property['bhk']; ?> BHK</span></p>
               <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
               <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>sqft</span></p>
            </div>
            <div class="flex-btn">
               <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">View Property</a>
               <input type="submit" value="send enquiry" name="send" class="btn">
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">No properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">Add New</a></p>';
      }
      ?>
      
   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">View All</a>
   </div>

</section>
<!-- listings section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

   let range = document.querySelector("#range");
   range.oninput = () =>{
      document.querySelector('#output').innerHTML = range.value;
   }

</script>

</body>
</html>