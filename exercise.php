<?php
session_start();
if(!isset($_SESSION['email']))
header('location:login.php');
?>
<!DOCTYPE html>
<!--html codes start from here-->
<html>
    <head>
        <title>home</title>
        <meta charset="UTF-8">
        <!--linking css page-->
        <link rel="stylesheet" href="exercise.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    </head>
    <body>
        <div class="wrapper">
            <!--navigation bar-->
            <nav class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li ><a href="home.php" ><i class="fa fa-home"></i>Home</a>
                         </li>
                    <li ><a href="food/food.php"><i class="fa fa-cutlery"></i>  Food</a>
                        <!--<div class="list2">-->
                            <!--<ul>-->
                            <!--    <li ><a href="#">Food diary</a> </li><br><hr>-->
                            <!--    <li ><a href="#">Database</a> </li><br><hr>-->
                            <!--</ul>-->
                        <!--</div>-->
                        </li>
                    <li ><a href="exercise.php" class="active"><i class="fa fa-child"></i>   Exercise</a> </li>
                    <li ><a href="#"><i class="fa fa-calendar"></i> Reports</a> </li>
                    <li ><a href="help.php"><i class="fa fa-question-circle"></i>  Help</a> </li>
                    <li ><a href="#"><i class="fa fa-cog"></i> Setting</a> </li>
                    <li ><a href="logout.php"><i class="fa fa-sign-out"></i>  Logout</a> </li>
                </ul>
            </nav>
            <!--exercise content-->
            <div class="exercise">
                <h1 id="top">The Best 10 Exercise For Weight Loss</h1>
                <p class="ex1">They're great choices if you *don't* want to lose weight, too.</p>
                <div class="exlist">
                    <!--exercise name with internal links-->
                    <ol>
                        <li><a href="#1" > Forward Lunge</a><br /></li>
                        <li><a href="#2"> Burpee</a><br /></li>
                        <li><a href="#3"> Explosive Lunge</a><br /></li>
                        <li><a href="#4"> Squat</a><br /></li>
                        <li><a href="#5"> Double Jump</a><br /></li>
                        <li><a href="#6"> Mountain Climbers</a><br /></li>
                        <li><a href="#7"> Jump Rope</a><br /></li>
                        <li><a href="#8"> Bodyweight Balance</a><br /></li>
                        <li><a href="#9"> Kettlebell Swing</a><br /></li>
                        <li><a href="#10"> Tabata Drill</a><br /></li>
                    </ol>
                </div><br><br><br>
                <div class="content">
                    <!--exercise images with explanation-->
                    <h2 id="1">1. Forward Lunge</h2><br>
                    <img src="images/1a.jpg" width="425px" height="425px"> <img src="images/1b.jpg" width="425px" height="425px"><br>
                    <img src="images/1c.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>Stand tall with feet hip-width apart. Place hands on hips or hold weights by sides to start. </P><br>
                    <p><b>B.</b>Take a controlled step forward with the right leg. Keeping spine tall, lower body until the front and back leg form a 90-degree angle. </P><br>
                    <p><b>C.</b>Pause, then step right leg back to start. Step left leg forward to repeat on the other side. </P><br>
                    <p><b>Sets:</b>3 </P><br>
                    <p><b>Reps:</b>10 per side </P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p>There are many variations to the lunge, but the classic forward lunge is still very effective for weight loss, as it works multiple muscles at once (think: glutes, quads, and hamstrings).</P><br><br><hr><br><br>
                        
                        <h2 id="2">2. Burpee</h2><br>
                    <img src="images/2a.jpg" width="425px" height="425px"> <img src="images/2b.jpg" width="425px" height="425px"><br>
                    <img src="images/2c.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>Stand with your feet shoulder-width apart and arms at your sides. Push your hips back, bend knees, and reach palms to the ground to lower into a crouch.Immediately lower back into a squat for the next rep. Repeat 8 to 12 times. Complete 3 sets.</P><br>
                    <p><b>B.</b> With hands shoulder-width on the floor directly in front of feet, and shift your weight to them to jump back and land softly in plank position. </P><br>
                    <p><b>C.</b>Jump feet forward so they land just outside of hands. Jump explosively into the air, reaching hands overhead or leaving by sides </P><br>
                    <p><b>Sets:</b>3 </P><br>
                    <p><b>Reps:</b>8 to 12 </P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p>This exercise effectively targets your core, chest, and legs simultaneously. Feel the burn and know you're building lots of lean muscle.</P><br><br><hr><br><br>
                        
                   
                    <h2 id="3">3. Explosive Lunge</h2><br>
                    <img src="images/3a.jpg" width="425px" height="425px"> <img src="images/3b.jpg" width="425px" height="425px"><br>
                    <img src="images/3c.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b> Start with feet together, hands on your hips. Step forward with the right leg and lower into a lunge so right knee is bent at a 90-degree angle. </P><br>
                    <p><b>B.</b>Jump up, switching legs midair.</P><br>
                    <p><b>C.</b> Land softly with the left leg forward, immediately lowering into a lunge.  </P><br>
                    <p><b>Sets:</b>3</P><br>
                    <p><b>Reps:</b>Repeat for one minute.</P><br><br><hr><br><br>
                                
                    <h2 id="4">4.Squat</h2><br>
                    <img src="images/4a.jpg" width="425px" height="425px"> <img src="images/4b.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>Start with feet hip-width apart, arms either at sides holding weights or clasped in front of chest.</P><br>
                    <p><b>B.</b> Keeping weight in heels and back straight, sit hips back and bend knees to lower into a squat until thighs are parallel to the floor. Remember to keep knees in line with toes the entire time. Maintain an even pace and rise back to start. </P><br>
                    <p><b>Sets:</b>3 </P><br>
                    <p><b>Reps:</b>15 </P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p>Squats are one of the best exercises for weight loss and for building overall strength. When you do them correctly, you engage your core and entire lower body. </P><br><br><hr><br><br>
                                    
                    <h2 id="5">5.Double jump</h2><br>
                    <img src="images/5a.jpg" width="425px" height="425px"> <img src="images/5b.jpg" width="425px" height="425px"><br>
                    <img src="images/5c.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>Stand with feet slightly wider than hip-width apart and lower into a deep squat.</P><br>
                    <p><b>B.</b> Rise up as if you're jumping, but land in a lunge position with your right leg back.</P><br>
                    <p><b>C.</b> Use momentum to jump from this lunge position back to a squat. Then repeat, landing in a lunge on the opposite side. </P><br>
                    <p><b>Sets:</b>2</P><br>
                    <p><b>Reps:</b>Repeat for 45 seconds </P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p> Take your traditional squats up a notch by incorporating a jump and lunge. The movement will increase your heart rate and you'll feel the burn in your abs, butt, and legs.</P><br><br><hr><br><br> 

                    <h2 id="6">6. Mountain Climbers</h2><br>
                    <img src="images/6a.jpg" width="425px" height="425px"> <img src="images/6b.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>Start in a plank position on the floor. Drive the right knee in toward chest without raising hips or allowing right foot to touch the floor.</P><br>
                    <p><b>B.</b>Place right foot back in plank and repeat on the other side, driving the left knee in toward chest. Repeat, alternating legs.</P><br>
                    <p><b>Sets:</b>3 </P><br>
                    <p><b>Reps:</b>Repeat for 1 minute </P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p> Mountain climbers are an excellent way to burn calories. The quick leg motion targets obliques, butt, and hamstrings</P><br><br><hr><br><br>
                                            
                    <h2 id="7">7.Jumping rope</h2><br>
                    <img src="images/7a.jpg" width="425px" height="425px"> 
                    <p><b>A.</b>Start with feet together, hands holding ends of the jump rope, elbows in toward ribs. Swing the jump rope and step or hop both feet over. Don't jump in between, just jump with each swing of the rope.</P><br>
                    
                    <p><b>Sets:</b>3 </P><br>
                    <p><b>Reps:</b> Repeat for 1 minute</P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p> Jumping rope is a great total-body tool made for weight loss. Challenge yourself to complete a full minute of jumping—it's harder than you think. 
                        
                        Check the length of the jump rope by holding it in each hands and ensuring the handles line up with shoulders.</P><br><br><hr><br><br>

                    <h2 id="8">8. Bodyweight Balance</h2><br>
                     <img src="images/8a.jpg" width="425px" height="425px"> <img src="images/8b.jpg" width="425px" height="425px"><br>
                     <p><b>A.</b>Start standing with feet together and the right leg lifted so right toes just tap the floor.</P><br>
                     <p><b>B.</b> Bend and touch your left knee with your right hand. Squeeze glute and keep core engaged to stand and return to start. </P><br>
                     <p><b>Sets:</b>3 </P><br>
                     <p><b>Reps:</b>10 per side </P><br><br><hr><br><br>
                                                    
                    <h2 id="9">9. Kettlebell Swing</h2><br>
                    <img src="images/9a.jpg" width="425px" height="425px"> <img src="images/9b.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>
                        Stand with feet slightly wider than hip-width apart and a kettlebell slightly in front of feet. Grasp kettlebell handle with both hands. Keeping back straight, hinge at the hips to hike the kettlebell backward between legs.</P><br>
                    <p><b>B.</b>Press hips forward to stand and swing the kettlebell overhead, keeping core engaged. Allow the kettlebell to fall forward and between legs to begin the next swing. </P><br>
                    <p><b>Sets:</b>3 </P><br>
                    <p><b>Reps:</b>15 </P><br>
                    <p><b>Mistakes and tips:</b></p><br> <p> Kettlebells are very effective when used for weight loss because they engage the entire body. Plus, they're low impact yet high intensity—ideal for calorie burn. If you're not ready for an overhead swing, stop the bell at shoulder height and let it swing back down between legs.</P><br><br><hr><br><br>
                    <h2 id="10">10. Tabata Drill</h2><br>
                    <img src="images/10a.jpg" width="425px" height="425px"> <img src="images/10b.jpg" width="425px" height="425px"><br>
                    <img src="images/10c.jpg" width="425px" height="425px"> <img src="images/10d.jpg" width="425px" height="425px"><br>
                    <p><b>A.</b>Begin with a light dumbbell in each hand, racked at your shoulders, standing with feet shoulder-width apart.
                    <p><b>B.</b>Jump feet out wide and jack dumbbells straight up overhead until arms are fully extended. Continue with all-out effort for 20 seconds, then rest for 10 seconds. </P><br>
                    <p><b>C.</b>Stand with feet shoulder-width apart, dumbbells at chest. Begin jabbing the dumbbells across the body, alternating sides. </P><br>
                    <p><b>D.</b>Continue with all-out effort for 20 seconds, then rest for 10 seconds. Repeat both exercises for 8 rounds total.</P><br>
                    <p><b>Sets:</b> 8 rounds</P><br>
                    <p><b>Reps:</b>Repeat for 20 seconds; rest for 10 seconds  </P><br><br><hr><br><br>
                         
                        <a href="#top">TOP<img src="images/top.png" class="top"></a>
                </div>
            
            </div>
        </div>
       
    </body>
</html>