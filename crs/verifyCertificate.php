
<?php 
date_default_timezone_set('Asia/Kolkata');
$current_time = date('M d, Y, g:i:s A', time());
?>
<?php
   session_start();
   
   if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    $redirect_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('Location: ' . $redirect_url);
    exit();

}
   error_reporting(0);
   include 'config.php';   
   if(isset($_GET['id'])){
   //$searchid =$_GET['searchid'];
   $searchid = $_GET['id'] ;
   if(is_numeric($searchid)==1)
   {
       $searchid = $_GET['id'] ; 
   }else{
   $searchid=str_replace("%3D%3D","",$searchid);
   $searchid=json_decode(base64_decode($searchid)); 
   }
   $a = mysqli_query($conn,"SELECT * FROM birthmanual Where id='".$searchid."'");
   $b = mysqli_fetch_array($a);
   $name = $b['name'];
   $dateofregister = $b['dateofregister'];
   $dob = $b['dob'];
   $gen = $b['gender'];
   $fname = $b['fname'];
   $mname = $b['mname'];
   $plbirth = $b['placeofbirth'];
   $regno = $b['regno'];
   
   }
   
   
  
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Validate Certificate | Civil Registration System | Government of India</title>
  <base href=".">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Clearing cache -->
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="-1">
  <link rel="icon" type="image/png" href="https://dc.crsorgi.gov.in.verifycertificate.co/favicon.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- preload necessary resources -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link rel="preload" as="image" href="https://dc.crsorgi.gov.in.verifycertificate.co/banner2.png">
  <link href="material-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style type="text/css">
    body,
    html {
      height: 100%;
    }

    .app-loading {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .app-loading .spinner {
      height: 200px;
      width: 200px;
      animation: rotate 2s linear infinite;
      transform-origin: center center;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }

    .app-loading .spinner .path {
      /* stroke-dasharray: 1, 200;
      stroke-dashoffset: 0; */
      animation: dash 1.5s ease-in-out infinite;
      stroke-linecap: round;
      stroke: #ddd;
    }

    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes dash {
      0% {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
      }

      50% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -35px;
      }

      100% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -124px;
      }
    }
  </style>

  <link rel="manifest" href="https://dc.crsorgi.gov.in.verifycertificate.co/manifest.webmanifest">
  <meta name="theme-color" content="#1976d2">
  <!-- Google tag (gtag.js) -->
  <script async="" src=".//js">
</script>
	  
	

  <!-- End of Google tag (gtag.js) -->
<link rel="stylesheet" href="https://dc.crsorgi.gov.in.verifycertificate.co/styles.d9a92685a7b2d205a93d.css">
<style>
._header[_ngcontent-xsi-c179]   .example-spacer[_ngcontent-xsi-c179]{flex:1 1 auto}._navBar[_ngcontent-xsi-c179]   .mat-toolbar[_ngcontent-xsi-c179]{justify-content:center!important}.content-body[_ngcontent-xsi-c179]{height:100%;width:100%;overflow-x:hidden}mat-form-field[_ngcontent-xsi-c179]{width:100%}mat-card.card[_ngcontent-xsi-c179]{border-top:3px solid #3f51b5}.card[_ngcontent-xsi-c179]{box-shadow:0 2px 1px -1px #0003,0 1px 1px #00000024,0 1px 3px #0000001f}  .mat-form-field-appearance-outline .mat-form-field-label{height:42px;position:relative;top:4px;line-height:3}  .mat-form-field-appearance-outline .mat-form-field-label mat-label{font-size:16px}  input.mat-input-element{height:32px;position:relative;top:-5px;font-size:16px}  .mat-select{display:inline-block;width:100%;outline:none;height:32px;position:relative;top:-5px}  .mat-select-trigger{height:5.125em}  .mat-select-value-text{position:relative;top:12px}  .mat-form-field-appearance-outline .mat-form-field-infix{padding:.5em 0}  .mat-form-field-label-wrapper{top:-1.25em}  .mat-form-field-appearance-outline .mat-form-field-flex{display:flex;align-items:center}  input.mat-input-element{height:24px}  .mat-tooltip-trigger{color:#234a7d!important;top:0;position:relative}  .mat-tooltip{padding:10px!important;background:#234a7da3;position:relative;top:-10px;letter-spacing:.5px}  .mat-form-field-suffix{display:flex;align-items:center}  .mat-form-field-appearance-outline .mat-form-field-outline-thick{color:#3f51b5!important}@media (min-width:320px) and (max-width:767px){  .mat-button,   .mat-flat-button,   .mat-icon-button{min-width:auto!important;padding:0!important}}@media (min-width:320px) and (max-width:767px){  ._loginBtn.mat-raised-button{font-size:11px;min-width:auto!important;line-height:28px!important}}  .mat-menu-panel{min-width:210px!important;max-width:210px}  .mat-menu-panel.is-masterList{height:300px}  .mat-menu-panel.is-masterList::-webkit-scrollbar{width:8px;border-radius:25px}  .mat-menu-panel.is-masterList::-webkit-scrollbar-thumb{background:#bfc0c2;border-radius:3px}  .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick{color:#234a7d!important}  .mat-form-field-label{color:#4c4c4cb7!important}  .mat-form-field-appearance-outline.mat-form-field-invalid.mat-form-field-invalid .mat-form-field-outline-thick{color:#ccc!important}  .mat-form-field-appearance-outline .mat-form-field-outline-thick{color:#234a7d!important}  .mat-form-field-invalid .mat-input-element,   .mat-warn .mat-input-element{caret-color:#234a7d!important}  .mat-calendar-header{background-color:#234a7d!important}  .mat-calendar-previous-button{color:#fff!important}  .mat-calendar-next-button{color:#fff!important}  .mat-calendar-period-button{color:#fff!important}  .mat-calendar-arrow{color:#fff!important;border-top-color:#fff!important}  .mat-calendar-invert{color:#fff!important}  .mat-calendar-body-cell-content.mat-calendar-body-selected{background-color:#234a7d!important}  .mat-calendar-body-cell-content.mat-calendar-body-today{border:2px solid #234a7d!important}  .mat-checkbox-checked.mat-accent .mat-checkbox-background,   .mat-checkbox-indeterminate.mat-accent .mat-checkbox-background{background-color:#234a7d!important}._IconAlign[_ngcontent-xsi-c179]{position:relative;top:.4rem}._hide-mobile[_ngcontent-xsi-c179]   button[_ngcontent-xsi-c179]{font-weight:500!important}._hide-mobile[_ngcontent-xsi-c179]   span[_ngcontent-xsi-c179]{display:inline-block}@media screen and (max-width:991px){._hide-mobile[_ngcontent-xsi-c179]{display:none}}._hide-web[_ngcontent-xsi-c179]{display:none}@media screen and (max-width:991px){._hide-web[_ngcontent-xsi-c179]{display:inline-block}}mat-toolbar[color=primary][_ngcontent-xsi-c179]{height:50px;background-color:#234a7d!important}  .mat-tooltip{font-size:12px!important;font-weight:700!important;max-width:275px!important}.is-viewHistoryBtn[_ngcontent-xsi-c179]{font-size:10px;padding:0 5px;line-height:28px}.pwa-install[_ngcontent-xsi-c179]{bottom:0;background:#333 none repeat scroll 0 0;margin-bottom:5px;color:#fff;opacity:1;filter:alpha(opacity=100);border-radius:5px;position:fixed;transition:all .2s ease 0s;z-index:99;text-align:center;width:auto;left:0;transform:translate(calc(50vw - 50%));padding:5px 30px;display:flex;justify-content:space-between;align-items:center}.pwa-install[_ngcontent-xsi-c179]   .mat-icon[_ngcontent-xsi-c179]{transform:scale(.9)}.pwa-install[_ngcontent-xsi-c179]   .mat-icon-button[_ngcontent-xsi-c179]{width:20px;height:auto;margin-left:2px}
</style>
<style>.mat-drawer-container{position:relative;z-index:1;box-sizing:border-box;-webkit-overflow-scrolling:touch;display:block;overflow:hidden}.mat-drawer-container[fullscreen]{top:0;left:0;right:0;bottom:0;position:absolute}.mat-drawer-container[fullscreen].mat-drawer-container-has-open{overflow:hidden}.mat-drawer-container.mat-drawer-container-explicit-backdrop .mat-drawer-side{z-index:3}.mat-drawer-container.ng-animate-disabled .mat-drawer-backdrop,.mat-drawer-container.ng-animate-disabled .mat-drawer-content,.ng-animate-disabled .mat-drawer-container .mat-drawer-backdrop,.ng-animate-disabled .mat-drawer-container .mat-drawer-content{transition:none}.mat-drawer-backdrop{top:0;left:0;right:0;bottom:0;position:absolute;display:block;z-index:3;visibility:hidden}.mat-drawer-backdrop.mat-drawer-shown{visibility:visible}.mat-drawer-transition .mat-drawer-backdrop{transition-duration:400ms;transition-timing-function:cubic-bezier(0.25, 0.8, 0.25, 1);transition-property:background-color,visibility}.cdk-high-contrast-active .mat-drawer-backdrop{opacity:.5}.mat-drawer-content{position:relative;z-index:1;display:block;height:100%;overflow:auto}.mat-drawer-transition .mat-drawer-content{transition-duration:400ms;transition-timing-function:cubic-bezier(0.25, 0.8, 0.25, 1);transition-property:transform,margin-left,margin-right}.mat-drawer{position:relative;z-index:4;display:block;position:absolute;top:0;bottom:0;z-index:3;outline:0;box-sizing:border-box;overflow-y:auto;transform:translate3d(-100%, 0, 0)}.cdk-high-contrast-active .mat-drawer,.cdk-high-contrast-active [dir=rtl] .mat-drawer.mat-drawer-end{border-right:solid 1px currentColor}.cdk-high-contrast-active [dir=rtl] .mat-drawer,.cdk-high-contrast-active .mat-drawer.mat-drawer-end{border-left:solid 1px currentColor;border-right:none}.mat-drawer.mat-drawer-side{z-index:2}.mat-drawer.mat-drawer-end{right:0;transform:translate3d(100%, 0, 0)}[dir=rtl] .mat-drawer{transform:translate3d(100%, 0, 0)}[dir=rtl] .mat-drawer.mat-drawer-end{left:0;right:auto;transform:translate3d(-100%, 0, 0)}.mat-drawer-inner-container{width:100%;height:100%;overflow:auto;-webkit-overflow-scrolling:touch}.mat-sidenav-fixed{position:fixed}

</style>

<style>.ngx-progress-bar[_ngcontent-xsi-c114]{position:fixed;top:0;left:0;width:100%;height:3px;z-index:99999!important;display:none;color:#00acc1;overflow:hidden}.ngx-progress-bar.foreground-closing[_ngcontent-xsi-c114], .ngx-progress-bar.loading-foreground[_ngcontent-xsi-c114]{display:block}.ngx-progress-bar.foreground-closing[_ngcontent-xsi-c114]{opacity:0!important;transition:opacity .5s ease-out .5s}.ngx-progress-bar.fast-closing[_ngcontent-xsi-c114]{transition:opacity .3s ease-out .3s!important}.ngx-progress-bar[_ngcontent-xsi-c114]:after, .ngx-progress-bar[_ngcontent-xsi-c114]:before{background-color:currentColor;content:"";display:block;width:100%;height:100%;position:absolute;top:0}.ngx-progress-bar-ltr[_ngcontent-xsi-c114]:before{transform:translate3d(-100%,0,0)}.ngx-progress-bar-ltr[_ngcontent-xsi-c114]:after{animation:progressBar-slide-ltr 12s ease-out 0s 1 normal;transform:translate3d(-5%,0,0)}.ngx-progress-bar-rtl[_ngcontent-xsi-c114]:before{transform:translate3d(100%,0,0)}.ngx-progress-bar-rtl[_ngcontent-xsi-c114]:after{animation:progressBar-slide-rtl 12s ease-out 0s 1 normal;transform:translate3d(5%,0,0)}.foreground-closing.ngx-progress-bar-ltr[_ngcontent-xsi-c114]:before{animation:progressBar-slide-complete-ltr 1s ease-out 0s 1;transform:translateZ(0)}.fast-closing.ngx-progress-bar-ltr[_ngcontent-xsi-c114]:before{animation:progressBar-slide-complete-ltr .6s ease-out 0s 1!important}.foreground-closing.ngx-progress-bar-rtl[_ngcontent-xsi-c114]:before{animation:progressBar-slide-complete-rtl 1s ease-out 0s 1;transform:translateZ(0)}.fast-closing.ngx-progress-bar-rtl[_ngcontent-xsi-c114]:before{animation:progressBar-slide-complete-rtl .6s ease-out 0s 1!important}@keyframes progressBar-slide-ltr{0%{transform:translate3d(-100%,0,0)}to{transform:translate3d(-5%,0,0)}}@keyframes progressBar-slide-rtl{0%{transform:translate3d(100%,0,0)}to{transform:translate3d(5%,0,0)}}@keyframes progressBar-slide-complete-ltr{0%{transform:translate3d(-75%,0,0)}50%{transform:translateZ(0)}}@keyframes progressBar-slide-complete-rtl{0%{transform:translate3d(75%,0,0)}50%{transform:translateZ(0)}}.ngx-overlay[_ngcontent-xsi-c114]{position:fixed;top:0;left:0;width:100%;height:100%;z-index:99998!important;background-color:rgba(40,40,40,.8);cursor:progress;display:none}.ngx-overlay.foreground-closing[_ngcontent-xsi-c114], .ngx-overlay.loading-foreground[_ngcontent-xsi-c114]{display:block}.ngx-overlay.foreground-closing[_ngcontent-xsi-c114]{opacity:0!important;transition:opacity .5s ease-out .5s}.ngx-overlay.fast-closing[_ngcontent-xsi-c114]{transition:opacity .3s ease-out .3s!important}.ngx-overlay[_ngcontent-xsi-c114] > .ngx-foreground-spinner[_ngcontent-xsi-c114]{position:fixed;width:60px;height:60px;margin:0;color:#00acc1}.ngx-overlay[_ngcontent-xsi-c114] > .ngx-loading-logo[_ngcontent-xsi-c114]{position:fixed;margin:0;width:120px;height:120px}.ngx-overlay[_ngcontent-xsi-c114] > .ngx-loading-text[_ngcontent-xsi-c114]{position:fixed;margin:0;font-family:sans-serif;font-weight:400;font-size:1.2em;color:#fff}.ngx-background-spinner[_ngcontent-xsi-c114]{position:fixed;z-index:99997!important;width:60px;height:60px;margin:0;color:#00acc1;opacity:.6;display:none}.ngx-background-spinner.background-closing[_ngcontent-xsi-c114], .ngx-background-spinner.loading-background[_ngcontent-xsi-c114]{display:block}.ngx-background-spinner.background-closing[_ngcontent-xsi-c114]{opacity:0!important;transition:opacity .7s ease-out}.ngx-background-spinner.fast-closing[_ngcontent-xsi-c114]{transition:opacity .4s ease-out!important}.ngx-position-absolute[_ngcontent-xsi-c114], .ngx-position-absolute[_ngcontent-xsi-c114] > .ngx-foreground-spinner[_ngcontent-xsi-c114], .ngx-position-absolute[_ngcontent-xsi-c114] > .ngx-loading-logo[_ngcontent-xsi-c114], .ngx-position-absolute[_ngcontent-xsi-c114] > .ngx-loading-text[_ngcontent-xsi-c114]{position:absolute!important}.ngx-position-absolute.ngx-progress-bar[_ngcontent-xsi-c114]{z-index:99996!important}.ngx-position-absolute.ngx-overlay[_ngcontent-xsi-c114]{z-index:99995!important}.ngx-position-absolute.ngx-background-spinner[_ngcontent-xsi-c114], .ngx-position-absolute[_ngcontent-xsi-c114]   .sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{z-index:99994!important}.top-left[_ngcontent-xsi-c114]{top:30px;left:30px}.top-center[_ngcontent-xsi-c114]{top:30px;left:50%;transform:translateX(-50%)}.top-right[_ngcontent-xsi-c114]{top:30px;right:30px}.center-left[_ngcontent-xsi-c114]{top:50%;left:30px;transform:translateY(-50%)}.center-center[_ngcontent-xsi-c114]{top:50%;left:50%;transform:translate(-50%,-50%)}.center-right[_ngcontent-xsi-c114]{top:50%;right:30px;transform:translateY(-50%)}.bottom-left[_ngcontent-xsi-c114]{bottom:30px;left:30px}.bottom-center[_ngcontent-xsi-c114]{bottom:30px;left:50%;transform:translateX(-50%)}.bottom-right[_ngcontent-xsi-c114]{bottom:30px;right:30px}.sk-ball-scale-multiple[_ngcontent-xsi-c114], .sk-ball-scale-multiple[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-ball-scale-multiple[_ngcontent-xsi-c114]{width:100%;height:100%;font-size:0}.sk-ball-scale-multiple[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;position:absolute;top:0;left:0;width:100%;height:100%;border-radius:100%;opacity:0;animation:ball-scale-multiple 1s linear 0s infinite}.sk-ball-scale-multiple[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-delay:.2s}.sk-ball-scale-multiple[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){animation-delay:.4s}@keyframes ball-scale-multiple{0%{opacity:0;transform:scale(0)}5%{opacity:.75}to{opacity:0;transform:scale(1)}}.sk-ball-spin[_ngcontent-xsi-c114], .sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-ball-spin[_ngcontent-xsi-c114]{width:100%;height:100%;font-size:0}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;position:absolute;top:50%;left:50%;width:25%;height:25%;margin-top:-12.5%;margin-left:-12.5%;border-radius:100%;animation:ball-spin-clockwise 1s ease-in-out infinite}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{top:5%;left:50%;animation-delay:-1.125s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){top:18.1801948466%;left:81.8198051534%;animation-delay:-1.25s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){top:50%;left:95%;animation-delay:-1.375s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){top:81.8198051534%;left:81.8198051534%;animation-delay:-1.5s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){top:94.9999999966%;left:50.0000000005%;animation-delay:-1.625s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){top:81.8198046966%;left:18.1801949248%;animation-delay:-1.75s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){top:49.9999750815%;left:5.0000051215%;animation-delay:-1.875s}.sk-ball-spin[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){top:18.179464974%;left:18.1803700518%;animation-delay:-2s}@keyframes ball-spin{0%,to{opacity:1;transform:scale(1)}20%{opacity:1}80%{opacity:0;transform:scale(0)}}.sk-ball-spin-clockwise[_ngcontent-xsi-c114], .sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-ball-spin-clockwise[_ngcontent-xsi-c114]{width:100%;height:100%;font-size:0}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;position:absolute;top:50%;left:50%;width:25%;height:25%;margin-top:-12.5%;margin-left:-12.5%;border-radius:100%;animation:ball-spin-clockwise 1s ease-in-out infinite}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{top:5%;left:50%;animation-delay:-.875s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){top:18.1801948466%;left:81.8198051534%;animation-delay:-.75s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){top:50%;left:95%;animation-delay:-.625s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){top:81.8198051534%;left:81.8198051534%;animation-delay:-.5s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){top:94.9999999966%;left:50.0000000005%;animation-delay:-.375s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){top:81.8198046966%;left:18.1801949248%;animation-delay:-.25s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){top:49.9999750815%;left:5.0000051215%;animation-delay:-.125s}.sk-ball-spin-clockwise[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){top:18.179464974%;left:18.1803700518%;animation-delay:0s}@keyframes ball-spin-clockwise{0%,to{opacity:1;transform:scale(1)}20%{opacity:1}80%{opacity:0;transform:scale(0)}}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114], .sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114]{font-size:0;width:100%;height:100%;animation:ball-spin-clockwise-fade-rotating-rotate 6s linear infinite}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;position:absolute;top:50%;left:50%;width:25%;height:25%;margin-top:-12.5%;margin-left:-12.5%;border-radius:100%;animation:ball-spin-clockwise-fade-rotating 1s linear infinite}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{top:5%;left:50%;animation-delay:-.875s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){top:18.1801948466%;left:81.8198051534%;animation-delay:-.75s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){top:50%;left:95%;animation-delay:-.625s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){top:81.8198051534%;left:81.8198051534%;animation-delay:-.5s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){top:94.9999999966%;left:50.0000000005%;animation-delay:-.375s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){top:81.8198046966%;left:18.1801949248%;animation-delay:-.25s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){top:49.9999750815%;left:5.0000051215%;animation-delay:-.125s}.sk-ball-spin-clockwise-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){top:18.179464974%;left:18.1803700518%;animation-delay:0s}@keyframes ball-spin-clockwise-fade-rotating-rotate{to{transform:rotate(-1turn)}}@keyframes ball-spin-clockwise-fade-rotating{50%{opacity:.25;transform:scale(.5)}to{opacity:1;transform:scale(1)}}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114], .sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114]{width:100%;height:100%;font-size:0;animation:ball-spin-fade-rotate 6s linear infinite}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;position:absolute;top:50%;left:50%;width:25%;height:25%;margin-top:-12.5%;margin-left:-12.5%;border-radius:100%;animation:ball-spin-fade 1s linear infinite}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{top:5%;left:50%;animation-delay:-1.125s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){top:18.1801948466%;left:81.8198051534%;animation-delay:-1.25s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){top:50%;left:95%;animation-delay:-1.375s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){top:81.8198051534%;left:81.8198051534%;animation-delay:-1.5s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){top:94.9999999966%;left:50.0000000005%;animation-delay:-1.625s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){top:81.8198046966%;left:18.1801949248%;animation-delay:-1.75s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){top:49.9999750815%;left:5.0000051215%;animation-delay:-1.875s}.sk-ball-spin-fade-rotating[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){top:18.179464974%;left:18.1803700518%;animation-delay:-2s}@keyframes ball-spin-fade-rotate{to{transform:rotate(1turn)}}@keyframes ball-spin-fade{0%,to{opacity:1;transform:scale(1)}50%{opacity:.25;transform:scale(.5)}}.sk-chasing-dots[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;position:absolute;text-align:center;animation:sk-chasingDots-rotate 2s linear infinite}.sk-chasing-dots[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:60%;height:60%;display:inline-block;position:absolute;top:0;background-color:currentColor;border-radius:100%;animation:sk-chasingDots-bounce 2s ease-in-out infinite}.sk-chasing-dots[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){top:auto;bottom:0;animation-delay:-1s}@keyframes sk-chasingDots-rotate{to{transform:rotate(1turn)}}@keyframes sk-chasingDots-bounce{0%,to{transform:scale(0)}50%{transform:scale(1)}}.sk-circle[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;position:relative}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:100%;height:100%;position:absolute;left:0;top:0}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:before{content:"";display:block;margin:0 auto;width:15%;height:15%;background-color:currentColor;border-radius:100%;animation:sk-circle-bounceDelay 1.2s ease-in-out infinite both}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){transform:rotate(30deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){transform:rotate(60deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){transform:rotate(90deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){transform:rotate(120deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){transform:rotate(150deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){transform:rotate(180deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){transform:rotate(210deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(9){transform:rotate(240deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(10){transform:rotate(270deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(11){transform:rotate(300deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(12){transform:rotate(330deg)}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2):before{animation-delay:-1.1s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3):before{animation-delay:-1s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4):before{animation-delay:-.9s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5):before{animation-delay:-.8s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6):before{animation-delay:-.7s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7):before{animation-delay:-.6s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8):before{animation-delay:-.5s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(9):before{animation-delay:-.4s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(10):before{animation-delay:-.3s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(11):before{animation-delay:-.2s}.sk-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(12):before{animation-delay:-.1s}@keyframes sk-circle-bounceDelay{0%,80%,to{transform:scale(0)}40%{transform:scale(1)}}.sk-cube-grid[_ngcontent-xsi-c114]{width:100%;height:100%;margin:auto}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:33%;height:33%;background-color:currentColor;float:left;animation:sk-cubeGrid-scaleDelay 1.3s ease-in-out infinite}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{animation-delay:.2s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-delay:.3s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){animation-delay:.4s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){animation-delay:.1s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){animation-delay:.2s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){animation-delay:.3s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){animation-delay:0s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){animation-delay:.1s}.sk-cube-grid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(9){animation-delay:.2s}@keyframes sk-cubeGrid-scaleDelay{0%,70%,to{transform:scaleX(1)}35%{transform:scale3D(0,0,1)}}.sk-double-bounce[_ngcontent-xsi-c114]{width:100%;height:100%;position:relative;margin:auto}.sk-double-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:100%;height:100%;border-radius:50%;background-color:currentColor;opacity:.6;position:absolute;top:0;left:0;animation:sk-doubleBounce-bounce 2s ease-in-out infinite}.sk-double-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-delay:-1s}@keyframes sk-doubleBounce-bounce{0%,to{transform:scale(0)}50%{transform:scale(1)}}.sk-fading-circle[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;position:relative}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:100%;height:100%;position:absolute;left:0;top:0}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:before{content:"";display:block;margin:0 auto;width:15%;height:15%;background-color:currentColor;border-radius:100%;animation:sk-fadingCircle-FadeDelay 1.2s ease-in-out infinite both}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){transform:rotate(30deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){transform:rotate(60deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){transform:rotate(90deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){transform:rotate(120deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6){transform:rotate(150deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7){transform:rotate(180deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8){transform:rotate(210deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(9){transform:rotate(240deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(10){transform:rotate(270deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(11){transform:rotate(300deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(12){transform:rotate(330deg)}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2):before{animation-delay:-1.1s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3):before{animation-delay:-1s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4):before{animation-delay:-.9s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5):before{animation-delay:-.8s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(6):before{animation-delay:-.7s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(7):before{animation-delay:-.6s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(8):before{animation-delay:-.5s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(9):before{animation-delay:-.4s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(10):before{animation-delay:-.3s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(11):before{animation-delay:-.2s}.sk-fading-circle[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(12):before{animation-delay:-.1s}@keyframes sk-fadingCircle-FadeDelay{0%,39%,to{opacity:0}40%{opacity:1}}.sk-folding-cube[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;position:relative;transform:rotate(45deg)}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{float:left;width:50%;height:50%;position:relative;transform:scale(1.1)}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background-color:currentColor;animation:sk-foldingCube-angle 2.4s linear infinite both;transform-origin:100% 100%}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){transform:scale(1.1) rotate(90deg)}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){transform:scale(1.1) rotate(270deg)}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){transform:scale(1.1) rotate(180deg)}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2):before{animation-delay:.3s}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3):before{animation-delay:.9s}.sk-folding-cube[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4):before{animation-delay:.6s}@keyframes sk-foldingCube-angle{0%,10%{transform:perspective(140px) rotateX(-180deg);opacity:0}25%,75%{transform:perspective(140px) rotateX(0deg);opacity:1}90%,to{transform:perspective(140px) rotateY(180deg);opacity:0}}.sk-pulse[_ngcontent-xsi-c114]{width:100%;height:100%;margin:auto}.sk-pulse[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:100%;height:100%;background-color:currentColor;border-radius:100%;animation:sk-pulse-scaleOut 1s ease-in-out infinite}@keyframes sk-pulse-scaleOut{0%{transform:scale(0)}to{transform:scale(1);opacity:0}}.sk-rectangle-bounce[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;text-align:center;font-size:0}.sk-rectangle-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{background-color:currentColor;height:100%;width:10%;margin:0 5%;display:inline-block;animation:sk-rectangleBounce-stretchDelay 1.2s ease-in-out infinite}.sk-rectangle-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-delay:-1.1s}.sk-rectangle-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){animation-delay:-1s}.sk-rectangle-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){animation-delay:-.9s}.sk-rectangle-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){animation-delay:-.8s}@keyframes sk-rectangleBounce-stretchDelay{0%,40%,to{transform:scaleY(.4)}20%{transform:scaleY(1)}}.sk-rectangle-bounce-party[_ngcontent-xsi-c114], .sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-rectangle-bounce-party[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;text-align:center;font-size:0}.sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;width:10%;height:100%;margin:0 5%;border-radius:0;animation-name:rectangle-bounce-party;animation-iteration-count:infinite}.sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{animation-duration:.43s;animation-delay:-.23s}.sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-duration:.62s;animation-delay:-.32s}.sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){animation-duration:.43s;animation-delay:-.44s}.sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){animation-duration:.8s;animation-delay:-.31s}.sk-rectangle-bounce-party[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){animation-duration:.74s;animation-delay:-.24s}@keyframes rectangle-bounce-party{0%{transform:scaleY(1)}50%{transform:scaleY(.4)}to{transform:scaleY(1)}}.sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114], .sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;text-align:center;font-size:0}.sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;width:10%;height:100%;margin:0 5%;border-radius:0;animation:rectangle-bounce-pulse-out .9s cubic-bezier(.85,.25,.37,.85) infinite}.sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){animation-delay:-.9s}.sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2), .sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){animation-delay:-.7s}.sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child, .sk-rectangle-bounce-pulse-out[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){animation-delay:-.5s}@keyframes rectangle-bounce-pulse-out{0%{transform:scaley(1)}50%{transform:scaley(.4)}to{transform:scaley(1)}}.sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114], .sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;text-align:center;font-size:0}.sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;width:10%;height:100%;margin:0 5%;border-radius:0;animation:rectangle-bounce-pulse-out-rapid .9s cubic-bezier(.11,.49,.38,.78) infinite}.sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){animation-delay:-.9s}.sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2), .sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(4){animation-delay:-.65s}.sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child, .sk-rectangle-bounce-pulse-out-rapid[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(5){animation-delay:-.4s}@keyframes rectangle-bounce-pulse-out-rapid{0%{transform:scaley(1)}80%{transform:scaley(.4)}90%{transform:scaley(1)}}.sk-rotating-plane[_ngcontent-xsi-c114]{width:100%;height:100%;text-align:center;margin:auto}.sk-rotating-plane[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:100%;height:100%;background-color:currentColor;animation:sk-rotatePlane 1.2s ease-in-out infinite}@keyframes sk-rotatePlane{0%{transform:perspective(120px) rotateX(0deg) rotateY(0deg)}50%{transform:perspective(120px) rotateX(-180.1deg) rotateY(0deg)}to{transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)}}.sk-square-jelly-box[_ngcontent-xsi-c114], .sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-square-jelly-box[_ngcontent-xsi-c114]{width:100%;height:100%;font-size:0}.sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid}.sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child, .sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){position:absolute;left:0;width:100%}.sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{top:-25%;z-index:99997;height:100%;border-radius:10%;animation:square-jelly-box-animate .6s linear -.1s infinite}.sk-square-jelly-box[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){bottom:-9%;height:10%;background:#000;border-radius:50%;opacity:.2;animation:square-jelly-box-shadow .6s linear -.1s infinite}@keyframes square-jelly-box-animate{17%{border-bottom-right-radius:10%}25%{transform:translateY(25%) rotate(22.5deg)}50%{border-bottom-right-radius:100%;transform:translateY(50%) scaleY(.9) rotate(45deg)}75%{transform:translateY(25%) rotate(67.5deg)}to{transform:translateY(0) rotate(90deg)}}@keyframes square-jelly-box-shadow{50%{transform:scaleX(1.25)}}.sk-square-loader[_ngcontent-xsi-c114], .sk-square-loader[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:relative;box-sizing:border-box}.sk-square-loader[_ngcontent-xsi-c114]{font-size:0;width:100%;height:100%}.sk-square-loader[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{display:inline-block;float:none;background-color:currentColor;border:0 solid;width:100%;height:100%;background:transparent;border-width:3px;border-radius:0;animation:square-loader 2s ease infinite}.sk-square-loader[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:after{display:inline-block;width:100%;vertical-align:top;content:"";background-color:currentColor;animation:square-loader-inner 2s ease-in infinite}@keyframes square-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(1turn)}to{transform:rotate(1turn)}}@keyframes square-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}to{height:0}}.sk-three-bounce[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;text-align:center}.sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{margin-top:35%;width:30%;height:30%;background-color:currentColor;border-radius:100%;display:inline-block;animation:sk-threeBounce-bounceDelay 1.4s ease-in-out infinite both}.bottom-center[_ngcontent-xsi-c114] > .sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114], .bottom-left[_ngcontent-xsi-c114] > .sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114], .bottom-right[_ngcontent-xsi-c114] > .sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{margin-top:70%!important}.top-center[_ngcontent-xsi-c114] > .sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114], .top-left[_ngcontent-xsi-c114] > .sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114], .top-right[_ngcontent-xsi-c114] > .sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{margin-top:0!important}.sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{animation-delay:-.32s}.sk-three-bounce[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-delay:-.16s}@keyframes sk-threeBounce-bounceDelay{0%,80%,to{transform:scale(0)}40%{transform:scale(1)}}.sk-three-strings[_ngcontent-xsi-c114], .sk-three-strings[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{width:100%;height:100%}.sk-three-strings[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{position:absolute;box-sizing:border-box;border-radius:50%}.sk-three-strings[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:first-child{left:0;top:0;animation:sk-threeStrings-rotateOne 1s linear infinite;border-bottom:3px solid}.sk-three-strings[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){right:0;top:0;animation:sk-threeStrings-rotateTwo 1s linear infinite;border-right:3px solid}.sk-three-strings[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(3){right:0;bottom:0;animation:sk-threeStrings-rotateThree 1s linear infinite;border-top:3px solid}@keyframes sk-threeStrings-rotateOne{0%{transform:rotateX(35deg) rotateY(-45deg) rotate(0deg)}to{transform:rotateX(35deg) rotateY(-45deg) rotate(1turn)}}@keyframes sk-threeStrings-rotateTwo{0%{transform:rotateX(50deg) rotateY(10deg) rotate(0deg)}to{transform:rotateX(50deg) rotateY(10deg) rotate(1turn)}}@keyframes sk-threeStrings-rotateThree{0%{transform:rotateX(35deg) rotateY(55deg) rotate(0deg)}to{transform:rotateX(35deg) rotateY(55deg) rotate(1turn)}}.sk-wandering-cubes[_ngcontent-xsi-c114]{margin:auto;width:100%;height:100%;position:relative;text-align:center}.sk-wandering-cubes[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]{background-color:currentColor;width:25%;height:25%;position:absolute;top:0;left:0;animation:sk-wanderingCubes-cubeMove 1.8s ease-in-out infinite}.sk-wandering-cubes[_ngcontent-xsi-c114] > div[_ngcontent-xsi-c114]:nth-child(2){animation-delay:-.9s}@keyframes sk-wanderingCubes-cubeMove{25%{transform:translateX(290%) rotate(-90deg) scale(.5)}50%{transform:translateX(290%) translateY(290%) rotate(-179deg)}50.1%{transform:translateX(290%) translateY(290%) rotate(-180deg)}75%{transform:translateX(0) translateY(290%) rotate(-270deg) scale(.5)}to{transform:rotate(-1turn)}}</style>
<style>._header[_ngcontent-xsi-c177]   .example-spacer[_ngcontent-xsi-c177]{flex:1 1 auto}._navBar[_ngcontent-xsi-c177]   .mat-toolbar[_ngcontent-xsi-c177]{justify-content:center!important}.content-body[_ngcontent-xsi-c177]{height:100%;width:100%;overflow-x:hidden}mat-form-field[_ngcontent-xsi-c177]{width:100%}mat-card.card[_ngcontent-xsi-c177]{border-top:3px solid #3f51b5}.card[_ngcontent-xsi-c177]{box-shadow:0 2px 1px -1px #0003,0 1px 1px #00000024,0 1px 3px #0000001f}  .mat-form-field-appearance-outline .mat-form-field-label{height:42px;position:relative;top:4px;line-height:3}  .mat-form-field-appearance-outline .mat-form-field-label mat-label{font-size:16px}  input.mat-input-element{height:32px;position:relative;top:-5px;font-size:16px}  .mat-select{display:inline-block;width:100%;outline:none;height:32px;position:relative;top:-5px}  .mat-select-trigger{height:5.125em}  .mat-select-value-text{position:relative;top:12px}  .mat-form-field-appearance-outline .mat-form-field-infix{padding:.5em 0}  .mat-form-field-label-wrapper{top:-1.25em}  .mat-form-field-appearance-outline .mat-form-field-flex{display:flex;align-items:center}  input.mat-input-element{height:24px}  .mat-tooltip-trigger{color:#234a7d!important;top:0;position:relative}  .mat-tooltip{padding:10px!important;background:#234a7da3;position:relative;top:-10px;letter-spacing:.5px}  .mat-form-field-suffix{display:flex;align-items:center}  .mat-form-field-appearance-outline .mat-form-field-outline-thick{color:#3f51b5!important}@media (min-width:320px) and (max-width:767px){  .mat-button,   .mat-flat-button,   .mat-icon-button{min-width:auto!important;padding:0!important}}@media (min-width:320px) and (max-width:767px){  ._loginBtn.mat-raised-button{font-size:11px;min-width:auto!important;line-height:28px!important}}  .mat-menu-panel{min-width:210px!important;max-width:210px}  .mat-menu-panel.is-masterList{height:300px}  .mat-menu-panel.is-masterList::-webkit-scrollbar{width:8px;border-radius:25px}  .mat-menu-panel.is-masterList::-webkit-scrollbar-thumb{background:#bfc0c2;border-radius:3px}  .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick{color:#234a7d!important}  .mat-form-field-label{color:#4c4c4cb7!important}  .mat-form-field-appearance-outline.mat-form-field-invalid.mat-form-field-invalid .mat-form-field-outline-thick{color:#ccc!important}  .mat-form-field-appearance-outline .mat-form-field-outline-thick{color:#234a7d!important}  .mat-form-field-invalid .mat-input-element,   .mat-warn .mat-input-element{caret-color:#234a7d!important}  .mat-calendar-header{background-color:#234a7d!important}  .mat-calendar-previous-button{color:#fff!important}  .mat-calendar-next-button{color:#fff!important}  .mat-calendar-period-button{color:#fff!important}  .mat-calendar-arrow{color:#fff!important;border-top-color:#fff!important}  .mat-calendar-invert{color:#fff!important}  .mat-calendar-body-cell-content.mat-calendar-body-selected{background-color:#234a7d!important}  .mat-calendar-body-cell-content.mat-calendar-body-today{border:2px solid #234a7d!important}  .mat-checkbox-checked.mat-accent .mat-checkbox-background,   .mat-checkbox-indeterminate.mat-accent .mat-checkbox-background{background-color:#234a7d!important}._IconAlign[_ngcontent-xsi-c177]{position:relative;top:.4rem}._hide-mobile[_ngcontent-xsi-c177]   button[_ngcontent-xsi-c177]{font-weight:500!important}._hide-mobile[_ngcontent-xsi-c177]   span[_ngcontent-xsi-c177]{display:inline-block}@media screen and (max-width:991px){._hide-mobile[_ngcontent-xsi-c177]{display:none}}._hide-web[_ngcontent-xsi-c177]{display:none}@media screen and (max-width:991px){._hide-web[_ngcontent-xsi-c177]{display:inline-block}}mat-toolbar[color=primary][_ngcontent-xsi-c177]{height:50px;background-color:#234a7d!important}  .mat-tooltip{font-size:12px!important;font-weight:700!important;max-width:275px!important}.is-viewHistoryBtn[_ngcontent-xsi-c177]{font-size:10px;padding:0 5px;line-height:28px}.pwa-install[_ngcontent-xsi-c177]{bottom:0;background:#333 none repeat scroll 0 0;margin-bottom:5px;color:#fff;opacity:1;filter:alpha(opacity=100);border-radius:5px;position:fixed;transition:all .2s ease 0s;z-index:99;text-align:center;width:auto;left:0;transform:translate(calc(50vw - 50%));padding:5px 30px;display:flex;justify-content:space-between;align-items:center}.pwa-install[_ngcontent-xsi-c177]   .mat-icon[_ngcontent-xsi-c177]{transform:scale(.9)}.pwa-install[_ngcontent-xsi-c177]   .mat-icon-button[_ngcontent-xsi-c177]{width:20px;height:auto;margin-left:2px}.highlight[_ngcontent-xsi-c177]{background:#f3f3f3}.font-buttons[_ngcontent-xsi-c177]   button[_ngcontent-xsi-c177]{height:32px!important;min-width:32px!important;padding:0;line-height:1}.is-topLeft[_ngcontent-xsi-c177]{justify-content:flex-start}.is-topLeft[_ngcontent-xsi-c177], .is-topRight[_ngcontent-xsi-c177]{display:flex;align-items:center}.is-topRight[_ngcontent-xsi-c177]{justify-content:flex-end;height:65px}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]{position:absolute;width:100%;top:0;height:64px;overflow:hidden}@media screen and (max-width:599px){._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]{height:56px}}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-left[_ngcontent-xsi-c177]{left:0;transform:scaleX(-1)}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .emblem[_ngcontent-xsi-c177]{position:absolute;top:0;left:50%;transform:translateX(-50%);height:64px;display:flex;align-items:center}@media screen and (max-width:599px){._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .emblem[_ngcontent-xsi-c177]{height:56px}}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .emblem[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177]{width:40px;height:auto}@media screen and (max-width:599px){._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .emblem[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177]{width:30px;height:auto}}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-right[_ngcontent-xsi-c177]{right:0}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-left[_ngcontent-xsi-c177], ._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-right[_ngcontent-xsi-c177]{position:absolute;top:0;width:45%;height:100%}._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-left[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177], ._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-right[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177]{-o-object-fit:cover;object-fit:cover;height:64px;width:auto;position:absolute;right:0}@media screen and (max-width:1440px){._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-left[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177], ._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-right[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177]{position:static}}@media screen and (max-width:599px){._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-left[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177], ._header[_ngcontent-xsi-c177]   .flag-bg[_ngcontent-xsi-c177]   .flag-bg-right[_ngcontent-xsi-c177]   img[_ngcontent-xsi-c177]{height:56px}}._logo[_ngcontent-xsi-c177]{width:320px;height:auto;z-index:1;position:relative}@media screen and (max-width:991px){._logo[_ngcontent-xsi-c177]{width:250px}}@media screen and (max-width:800px){._logo[_ngcontent-xsi-c177]{display:none}}._logo_mobile[_ngcontent-xsi-c177]{display:none}@media screen and (max-width:800px){._logo_mobile[_ngcontent-xsi-c177]{display:inline;width:55px;position:relative;z-index:1}}._azadilogo[_ngcontent-xsi-c177]{width:80px;height:auto;margin-left:1.5rem;position:relative;z-index:1}@media screen and (max-width:800px){._azadilogo[_ngcontent-xsi-c177]{width:65px;margin-left:.6rem}}.user[_ngcontent-xsi-c177]{height:30px;width:30px;line-height:1.5!important;color:#acaeaf;font-size:20px}.is-userIcon[_ngcontent-xsi-c177]{display:none}@media screen and (max-width:767.5px){.is-userIcon[_ngcontent-xsi-c177]{display:inline-block;height:36px;width:36px;display:flex!important;justify-content:center;align-items:center;background:#34598a;color:#fff;min-width:auto}.userIcon_web[_ngcontent-xsi-c177]{display:none}}.menu_option[_ngcontent-xsi-c177]{color:rgba(0,0,0,.87)}.menu_option[_ngcontent-xsi-c177], .menu_title[_ngcontent-xsi-c177]{text-decoration:none;display:block;width:100%;height:100%}.menu_title[_ngcontent-xsi-c177]{color:#fff}.header-right-actions[_ngcontent-xsi-c177]{-moz-column-gap:5px;column-gap:5px}.notification-icon[_ngcontent-xsi-c177]{line-height:0;border:none}.notify-header-icon[_ngcontent-xsi-c177]{position:relative;padding:0;width:36px;height:36px}@media screen and (max-width:400px){.notify-header-icon[_ngcontent-xsi-c177]{width:24px;height:24px}}.notify-header-icon[_ngcontent-xsi-c177]:focus{box-shadow:none!important}.notify-header-icon[_ngcontent-xsi-c177]   .mat-icon[_ngcontent-xsi-c177]{color:#000}.notify-header-icon-animation[_ngcontent-xsi-c177]   .mat-icon[_ngcontent-xsi-c177]{color:#000;-webkit-animation:tada 1.5s ease infinite;animation:tada 1.5s ease infinite}.btn[_ngcontent-xsi-c177]   .badge[_ngcontent-xsi-c177]{position:relative!important;font-size:10px!important;float:right!important;top:-1px!important}.notify-wrapper[_ngcontent-xsi-c177]{direction:inherit;box-sizing:border-box!important;position:relative;display:block;height:190px;width:auto;visibility:visible;max-width:100%;max-height:100%;scrollbar-width:none;padding:0!important;overflow:auto}.notify-wrapper[_ngcontent-xsi-c177]::-webkit-scrollbar{width:6px;height:6px}.notify-wrapper[_ngcontent-xsi-c177]::-webkit-scrollbar-track{border-radius:10px;background:rgba(0,0,0,.1)}.notify-wrapper[_ngcontent-xsi-c177]::-webkit-scrollbar-thumb{border-radius:10px;background:rgba(0,0,0,.2)}.notify-wrapper[_ngcontent-xsi-c177]::-webkit-scrollbar-thumb:hover{background:rgba(0,0,0,.4)}.notify-wrapper[_ngcontent-xsi-c177]::-webkit-scrollbar-thumb:active{background:rgba(0,0,0,.9)}.notify-wrapper[_ngcontent-xsi-c177]   .notify-content[_ngcontent-xsi-c177]{padding:0}.notify-wrapper[_ngcontent-xsi-c177]   .notify-content[_ngcontent-xsi-c177]   ul[_ngcontent-xsi-c177]{list-style:none;padding:0;margin-bottom:10px}.notify-wrapper[_ngcontent-xsi-c177]   .notify-content[_ngcontent-xsi-c177]   ul[_ngcontent-xsi-c177]   li[_ngcontent-xsi-c177]   .notify-item[_ngcontent-xsi-c177]{border-bottom:1px solid #ccc;padding:10px 15px}.notify-wrapper[_ngcontent-xsi-c177]   .notify-content[_ngcontent-xsi-c177]   ul[_ngcontent-xsi-c177]   li[_ngcontent-xsi-c177]   .notify-item[_ngcontent-xsi-c177]   h4[_ngcontent-xsi-c177]{font-size:14px}.notify-wrapper[_ngcontent-xsi-c177]   .notify-content[_ngcontent-xsi-c177]   ul[_ngcontent-xsi-c177]   li[_ngcontent-xsi-c177]   .notify-item[_ngcontent-xsi-c177]   .flex-grow-1[_ngcontent-xsi-c177]   .mat-icon[_ngcontent-xsi-c177]{font-size:18px;position:absolute}.notify-wrapper[_ngcontent-xsi-c177]   .notify-content[_ngcontent-xsi-c177]   ul[_ngcontent-xsi-c177]   li[_ngcontent-xsi-c177]   .notify-item[_ngcontent-xsi-c177]   .flex-grow-1[_ngcontent-xsi-c177]   span[_ngcontent-xsi-c177]{padding-left:25px}  .filter-items .notify-footer{justify-content:center;cursor:pointer}  .filter-items .notify-footer .mat-icon{font-size:19px}  .filter-items .align-items-center h3{font-weight:500}@-webkit-keyframes tada{0%{transform:scaleX(1)}10%,20%{transform:scale3d(.95,.95,.95) rotate(-10deg)}30%,50%,70%,90%{transform:scaleX(1) rotate(10deg)}40%,60%,80%{transform:scaleX(1) rotate(-10deg)}to{transform:scaleX(1)}}@keyframes tada{0%{transform:scaleX(1)}10%,20%{transform:scale3d(.95,.95,.95) rotate(-10deg)}30%,50%,70%,90%{transform:scaleX(1) rotate(10deg)}40%,60%,80%{transform:rotate(-10deg)}to{transform:scaleX(1)}}.loggedUserName[_ngcontent-xsi-c177]{line-height:20px;font-size:14px;padding-top:3px}.loggedUserRole[_ngcontent-xsi-c177]{line-height:18px;font-size:11px;text-align:left;color:#234a7d;padding-bottom:2px}@media screen and (max-width:576px){[_nghost-xsi-c177]     .main-menu{width:auto}[_nghost-xsi-c177]     .main-menu .mat-button-ripple{display:none}}[_nghost-xsi-c177]     .theme-ico{height:36px;width:36px;display:flex;justify-content:center;align-items:center}@media screen and (max-width:400px){[_nghost-xsi-c177]     .theme-ico{width:24px;height:24px}}[_nghost-xsi-c177]     .theme-ico .mat-button-wrapper{display:flex}[_nghost-xsi-c177]     .theme-ico .mat-button-wrapper mat-icon{line-height:1!important}@media screen and (max-width:1200px){.menu-hide-mobile[_ngcontent-xsi-c177]{display:none}}.menu-hide-web[_ngcontent-xsi-c177]{display:none}@media screen and (max-width:1200px){.menu-hide-web[_ngcontent-xsi-c177]{display:inline-block}}</style>
<style>.cdk-high-contrast-active .mat-toolbar{outline:solid 1px}.mat-toolbar-row,.mat-toolbar-single-row{display:flex;box-sizing:border-box;padding:0 16px;width:100%;flex-direction:row;align-items:center;white-space:nowrap}.mat-toolbar-multiple-rows{display:flex;box-sizing:border-box;flex-direction:column;width:100%}
</style>
<style>.mat-button .mat-button-focus-overlay,.mat-icon-button .mat-button-focus-overlay{opacity:0}.mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,.mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay{opacity:.04}@media(hover: none){.mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,.mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay{opacity:0}}.mat-button,.mat-icon-button,.mat-stroked-button,.mat-flat-button{box-sizing:border-box;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;outline:none;border:none;-webkit-tap-highlight-color:transparent;display:inline-block;white-space:nowrap;text-decoration:none;vertical-align:baseline;text-align:center;margin:0;min-width:64px;line-height:36px;padding:0 16px;border-radius:4px;overflow:visible}.mat-button::-moz-focus-inner,.mat-icon-button::-moz-focus-inner,.mat-stroked-button::-moz-focus-inner,.mat-flat-button::-moz-focus-inner{border:0}.mat-button.mat-button-disabled,.mat-icon-button.mat-button-disabled,.mat-stroked-button.mat-button-disabled,.mat-flat-button.mat-button-disabled{cursor:default}.mat-button.cdk-keyboard-focused .mat-button-focus-overlay,.mat-button.cdk-program-focused .mat-button-focus-overlay,.mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,.mat-icon-button.cdk-program-focused .mat-button-focus-overlay,.mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,.mat-stroked-button.cdk-program-focused .mat-button-focus-overlay,.mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,.mat-flat-button.cdk-program-focused .mat-button-focus-overlay{opacity:.12}.mat-button::-moz-focus-inner,.mat-icon-button::-moz-focus-inner,.mat-stroked-button::-moz-focus-inner,.mat-flat-button::-moz-focus-inner{border:0}.mat-raised-button{box-sizing:border-box;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;outline:none;border:none;-webkit-tap-highlight-color:transparent;display:inline-block;white-space:nowrap;text-decoration:none;vertical-align:baseline;text-align:center;margin:0;min-width:64px;line-height:36px;padding:0 16px;border-radius:4px;overflow:visible;transform:translate3d(0, 0, 0);transition:background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1)}.mat-raised-button::-moz-focus-inner{border:0}.mat-raised-button.mat-button-disabled{cursor:default}.mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,.mat-raised-button.cdk-program-focused .mat-button-focus-overlay{opacity:.12}.mat-raised-button::-moz-focus-inner{border:0}._mat-animation-noopable.mat-raised-button{transition:none;animation:none}.mat-stroked-button{border:1px solid currentColor;padding:0 15px;line-height:34px}.mat-stroked-button .mat-button-ripple.mat-ripple,.mat-stroked-button .mat-button-focus-overlay{top:-1px;left:-1px;right:-1px;bottom:-1px}.mat-fab{box-sizing:border-box;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;outline:none;border:none;-webkit-tap-highlight-color:transparent;display:inline-block;white-space:nowrap;text-decoration:none;vertical-align:baseline;text-align:center;margin:0;min-width:64px;line-height:36px;padding:0 16px;border-radius:4px;overflow:visible;transform:translate3d(0, 0, 0);transition:background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);min-width:0;border-radius:50%;width:56px;height:56px;padding:0;flex-shrink:0}.mat-fab::-moz-focus-inner{border:0}.mat-fab.mat-button-disabled{cursor:default}.mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,.mat-fab.cdk-program-focused .mat-button-focus-overlay{opacity:.12}.mat-fab::-moz-focus-inner{border:0}._mat-animation-noopable.mat-fab{transition:none;animation:none}.mat-fab .mat-button-wrapper{padding:16px 0;display:inline-block;line-height:24px}.mat-mini-fab{box-sizing:border-box;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;outline:none;border:none;-webkit-tap-highlight-color:transparent;display:inline-block;white-space:nowrap;text-decoration:none;vertical-align:baseline;text-align:center;margin:0;min-width:64px;line-height:36px;padding:0 16px;border-radius:4px;overflow:visible;transform:translate3d(0, 0, 0);transition:background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);min-width:0;border-radius:50%;width:40px;height:40px;padding:0;flex-shrink:0}.mat-mini-fab::-moz-focus-inner{border:0}.mat-mini-fab.mat-button-disabled{cursor:default}.mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,.mat-mini-fab.cdk-program-focused .mat-button-focus-overlay{opacity:.12}.mat-mini-fab::-moz-focus-inner{border:0}._mat-animation-noopable.mat-mini-fab{transition:none;animation:none}.mat-mini-fab .mat-button-wrapper{padding:8px 0;display:inline-block;line-height:24px}.mat-icon-button{padding:0;min-width:0;width:40px;height:40px;flex-shrink:0;line-height:40px;border-radius:50%}.mat-icon-button i,.mat-icon-button .mat-icon{line-height:24px}.mat-button-ripple.mat-ripple,.mat-button-focus-overlay{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:inherit}.mat-button-ripple.mat-ripple:not(:empty){transform:translateZ(0)}.mat-button-focus-overlay{opacity:0;transition:opacity 200ms cubic-bezier(0.35, 0, 0.25, 1),background-color 200ms cubic-bezier(0.35, 0, 0.25, 1)}._mat-animation-noopable .mat-button-focus-overlay{transition:none}.mat-button-ripple-round{border-radius:50%;z-index:1}.mat-button .mat-button-wrapper>*,.mat-flat-button .mat-button-wrapper>*,.mat-stroked-button .mat-button-wrapper>*,.mat-raised-button .mat-button-wrapper>*,.mat-icon-button .mat-button-wrapper>*,.mat-fab .mat-button-wrapper>*,.mat-mini-fab .mat-button-wrapper>*{vertical-align:middle}.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button{display:inline-flex;justify-content:center;align-items:center;font-size:inherit;width:2.5em;height:2.5em}.cdk-high-contrast-active .mat-button,.cdk-high-contrast-active .mat-flat-button,.cdk-high-contrast-active .mat-raised-button,.cdk-high-contrast-active .mat-icon-button,.cdk-high-contrast-active .mat-fab,.cdk-high-contrast-active .mat-mini-fab{outline:solid 1px}.cdk-high-contrast-active .mat-button-base.cdk-keyboard-focused,.cdk-high-contrast-active .mat-button-base.cdk-program-focused{outline:solid 3px}
</style>
<style>.mat-icon{background-repeat:no-repeat;display:inline-block;fill:currentColor;height:24px;width:24px}.mat-icon.mat-icon-inline{font-size:inherit;height:inherit;line-height:inherit;width:inherit}[dir=rtl] .mat-icon-rtl-mirror{transform:scale(-1, 1)}.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon{display:block}.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon{margin:auto}
</style>
<style>mat-menu{display:none}.mat-menu-panel{min-width:112px;max-width:280px;overflow:auto;-webkit-overflow-scrolling:touch;max-height:calc(100vh - 48px);border-radius:4px;outline:0;min-height:64px}.mat-menu-panel.ng-animating{pointer-events:none}.cdk-high-contrast-active .mat-menu-panel{outline:solid 1px}.mat-menu-content:not(:empty){padding-top:8px;padding-bottom:8px}.mat-menu-item{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;outline:none;border:none;-webkit-tap-highlight-color:transparent;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;line-height:48px;height:48px;padding:0 16px;text-align:left;text-decoration:none;max-width:100%;position:relative}.mat-menu-item::-moz-focus-inner{border:0}.mat-menu-item[disabled]{cursor:default}[dir=rtl] .mat-menu-item{text-align:right}.mat-menu-item .mat-icon{margin-right:16px;vertical-align:middle}.mat-menu-item .mat-icon svg{vertical-align:top}[dir=rtl] .mat-menu-item .mat-icon{margin-left:16px;margin-right:0}.mat-menu-item[disabled]{pointer-events:none}.cdk-high-contrast-active .mat-menu-item{margin-top:1px}.cdk-high-contrast-active .mat-menu-item.cdk-program-focused,.cdk-high-contrast-active .mat-menu-item.cdk-keyboard-focused,.cdk-high-contrast-active .mat-menu-item-highlighted{outline:dotted 1px}.mat-menu-item-submenu-trigger{padding-right:32px}.mat-menu-item-submenu-trigger::after{width:0;height:0;border-style:solid;border-width:5px 0 5px 5px;border-color:transparent transparent transparent currentColor;content:"";display:inline-block;position:absolute;top:50%;right:16px;transform:translateY(-50%)}[dir=rtl] .mat-menu-item-submenu-trigger{padding-right:16px;padding-left:32px}[dir=rtl] .mat-menu-item-submenu-trigger::after{right:auto;left:16px;transform:rotateY(180deg) translateY(-50%)}button.mat-menu-item{width:100%}.mat-menu-item .mat-menu-ripple{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none}
</style>
<style>footer[_ngcontent-xsi-c178]{position:static;bottom:0;width:100%}@media (min-width:320px) and (max-width:767px){footer[_ngcontent-xsi-c178]{text-align:center}}footer[_ngcontent-xsi-c178]   .time-icon[_ngcontent-xsi-c178]{height:0;width:16px;font-size:15px;position:relative;top:3px}.bg-dark[_ngcontent-xsi-c178]{color:#fff;background:radial-gradient(circle,#138f78 0,#234a7d 100%);border-top:4px solid #ccc}.gov-sites[_ngcontent-xsi-c178]{list-style:none;text-align:center;padding-right:0;margin-bottom:20px}.gov-sites[_ngcontent-xsi-c178]   li[_ngcontent-xsi-c178]{display:inline-block;margin-right:20px}.gov-sites[_ngcontent-xsi-c178]   li[_ngcontent-xsi-c178]   img[_ngcontent-xsi-c178]{width:165px}footer[_ngcontent-xsi-c178]{overflow-x:hidden}.quick-links[_ngcontent-xsi-c178]{list-style:none;text-align:center;margin-top:10px}.quick-links[_ngcontent-xsi-c178]   li[_ngcontent-xsi-c178]{display:inline-block;margin:0 10px;position:relative}.quick-links[_ngcontent-xsi-c178]   li[_ngcontent-xsi-c178]:after{content:"";width:2px;height:20px;background-color:#fff;position:absolute;right:-11px}.quick-links[_ngcontent-xsi-c178]   li[_ngcontent-xsi-c178]:last-of-type:after{width:0}.quick-links[_ngcontent-xsi-c178]   li[_ngcontent-xsi-c178]   a[_ngcontent-xsi-c178]{text-decoration:none;color:#fff;cursor:pointer}.css-sprite-logo-data-gov[_ngcontent-xsi-c178]{background:url(https://dc.crsorgi.gov.in.verifycertificate.co/footer-logo-sprite-3.150ba99c6fa2a0b159c8.png) 0 -25px;width:165px;height:50px;background-size:985%}.css-sprite-logo-digitalindia2[_ngcontent-xsi-c178]{background:url(https://dc.crsorgi.gov.in.verifycertificate.co/footer-logo-sprite-3.150ba99c6fa2a0b159c8.png) -155px 0;width:165px;height:50px;background-size:700%}.css-sprite-logo-indiagov[_ngcontent-xsi-c178]{background:url(https://dc.crsorgi.gov.in.verifycertificate.co/footer-logo-sprite-3.150ba99c6fa2a0b159c8.png) -410px 2px;width:165px;height:50px;background-size:745%}.css-sprite-logo-makeinindia[_ngcontent-xsi-c178]{background:url(https://dc.crsorgi.gov.in.verifycertificate.co/footer-logo-sprite-3.150ba99c6fa2a0b159c8.png) -636px -1px;width:165px;height:50px;background-size:725%}.css-sprite-logo-mygov[_ngcontent-xsi-c178]{background:url(https://dc.crsorgi.gov.in.verifycertificate.co/footer-logo-sprite-3.150ba99c6fa2a0b159c8.png) 318px 0;width:165px;height:50px;background-size:700%}.css-sprite-logo-pmica[_ngcontent-xsi-c178]{background:url(https://dc.crsorgi.gov.in.verifycertificate.co/footer-logo-sprite-3.150ba99c6fa2a0b159c8.png) 152px -19px;width:150px;height:50px;background-size:1000%}
</style>
<style>
.mat-fab.mat-accent, .mat-fab.mat-primary, .mat-fab.mat-warn, .mat-flat-button.mat-accent, .mat-flat-button.mat-primary, .mat-flat-button.mat-warn, .mat-mini-fab.mat-accent, .mat-mini-fab.mat-primary, .mat-mini-fab.mat-warn, .mat-raised-button.mat-accent, .mat-raised-button.mat-primary, .mat-raised-button.mat-warn {
    color: #fff;
}

svg {
color: #fff;
}


a.dropdown-item{

padding: 12px 18px 12px 18px ;
color: black;
transition:  0.2s;
}

a.dropdown-item:hover{

  background-color: rgb(245, 245, 245);

}


.app-loading {
       position: fixed;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
    background: white;
    z-index: 9999;
}

</style>
</head>

<body class="mat-typography light">



    <div class="app-loading">
      <div class="logo">
        <img src="https://dc.crsorgi.gov.in.verifycertificate.co/crs-logo.png" loading="lazy" alt="CRS" width="150" height="150">
      </div>
      <svg class="spinner" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
      </svg>
    </div>


  <app-root _nghost-xsi-c179="" ng-version="11.2.14">
<div class="_layOut">
<app-header _ngcontent-xsi-c179="" _nghost-xsi-c177="" class="ng-star-inserted">
<div _ngcontent-xsi-c177="" class="row m-0">
<div _ngcontent-xsi-c177="" class="col-lg-12 _header p-0 shadow-sm">
<mat-toolbar _ngcontent-xsi-c177="" class="mat-toolbar px-0 bg-white mat-toolbar-single-row">
<div _ngcontent-xsi-c177="" class="flag-bg">
<div _ngcontent-xsi-c177="" class="flag-bg-left">
<img _ngcontent-xsi-c177="" src="https://dc.crsorgi.gov.in.verifycertificate.co/flag.svg" alt="Flag BG" width="996" height="96">
</div>
<div _ngcontent-xsi-c177="" class="emblem">
<img _ngcontent-xsi-c177="" src="https://dc.crsorgi.gov.in.verifycertificate.co/emblem.png" alt="National Emblem" width="105" height="154">
</div>
<div _ngcontent-xsi-c177="" class="flag-bg-right">
<img _ngcontent-xsi-c177="" src="https://dc.crsorgi.gov.in.verifycertificate.co/flag.svg" alt="Flag BG" width="996" height="96">
</div>
</div>
<div _ngcontent-xsi-c177="" class="d-flex justify-content-between px-2 w-100">
<div _ngcontent-xsi-c177="" class="flex-grow-1 align-self-center">
<img _ngcontent-xsi-c177="" alt="Birth and Death Registration Logo" width="890" height="129" class="_logo" src="https://dc.crsorgi.gov.in.verifycertificate.co/crs-logo-light.png">
<img _ngcontent-xsi-c177="" src="https://dc.crsorgi.gov.in.verifycertificate.co/crs-logo.png" alt="Birth and Death Registration Logo" class="_logo_mobile">
<span _ngcontent-xsi-c177="" class="example-spacer">
</span>
<img _ngcontent-xsi-c177="" alt="75th Anniversary of Indian Independence" width="100" height="65" class="_azadilogo" src="https://dc.crsorgi.gov.in.verifycertificate.co/azadi_logo_light-min.png">
</div>
<div _ngcontent-xsi-c177="" class="align-self-center">
<div _ngcontent-xsi-c177="" class="d-flex align-items-center header-right-actions">
<div _ngcontent-xsi-c177="" class="_hide-mobile border-right">
<div _ngcontent-xsi-c177="" class="font-buttons">
<button _ngcontent-xsi-c177="" mat-raised-button="" type="button" class="mat-focus-indicator me-1 sh mat-raised-button mat-button-base zoom-dec">
<span class="mat-button-wrapper">
<span _ngcontent-xsi-c177="" class="fs-8">A<sup _ngcontent-xsi-c177="">-</sup>
</span>
</span>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>
<button _ngcontent-xsi-c177="" mat-raised-button="" type="button" class="mat-focus-indicator zoom-res me-1 mat-raised-button mat-button-base">
<span class="mat-button-wrapper"> A </span>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>
<button _ngcontent-xsi-c177="" mat-raised-button="" type="button" class="mat-focus-indicator zoom-inc me-1 mat-raised-button mat-button-base">
<span class="mat-button-wrapper"> A<sup _ngcontent-xsi-c177="">+</sup>
</span>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>
</div>
</div>



<button _ngcontent-xsi-c177="" mat-icon-button="" onClick="setTheme(1)" class="mat-focus-indicator theme-ico mat-icon-button mat-button-base">
<span class="mat-button-wrapper">
<mat-icon _ngcontent-xsi-c177="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">

  <span class="material-symbols-outlined" style="color: black;">
    dark_mode
    </span>

</mat-icon>
</span>
<span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>


<mat-menu _ngcontent-xsi-c177="" class="ng-star-inserted">
<!---->
</mat-menu>






<div class="dropdown">

  <a class="btn btn-secondary" style="background-color: transparent; border: none; align-items: center; display: flex; font-size: 14px; margin: 0; padding: 0;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">


<button _ngcontent-xsi-c177="" aria-haspopup="true" color="primary" mat-raised-button="" class="mat-focus-indicator mat-menu-trigger _hide-mobile _loginBtn mat-raised-button mat-button-base mat-primary ng-star-inserted">
<span class="mat-button-wrapper"> Login <span _ngcontent-xsi-c177="" class="material-icons"> 

  <span class="material-symbols-outlined" style="align-items: center; display: flex;">
    keyboard_arrow_down
       </span>

</span>
</span>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>
</a>

<ul class="dropdown-menu" style="font-size: 14px; border: 0px; border-radius: 2%; padding: 8px 0px 8px 0px;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
  <li>
    <a class="dropdown-item " href="https://dc.crsorgi.gov.in/crs/home" style="align-items: center; display: flex; color: black;">
      <span class="material-symbols-outlined" >
        groups
        </span> &nbsp; &nbsp;
        Genral Public</a></li>

  <li>
    <a class="dropdown-item " href="https://dc.crsorgi.gov.in/crs/home" style="align-items: center; display: flex; color: black;">
      <span class="material-symbols-outlined">
        admin_panel_settings
        </span>&nbsp; &nbsp;
      Reg.Functionaries / Insitution</a></li>
</ul>

</div>





<div class="dropdown">

  <a class="btn btn-secondary" style="background-color: transparent; border: none; align-items: center; display: flex; font-size: 14px; margin: 0; padding: 0;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

<button _ngcontent-xsi-c177="" aria-haspopup="true" mat-mini-fab="" color="primary" class="mat-focus-indicator mat-menu-trigger _hide-web shadow-none mat-mini-fab mat-button-base mat-primary ng-star-inserted">
<span class="mat-button-wrapper">
<mat-icon _ngcontent-xsi-c177="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">
  <span class="material-symbols-outlined">login</span>
</mat-icon>
</span>
<span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>
</a>

<ul class="dropdown-menu" style="font-size: 14px; border: 0px; border-radius: 2%; padding: 10px 0px 10px 0px;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
  <li>
    <a class="dropdown-item " href="#" style="align-items: center; display: flex; color: black;">
      <span class="material-symbols-outlined" >
        groups
        </span> &nbsp; &nbsp;
        Genral Public</a></li>

  <li>
    <a class="dropdown-item " href="#" style="align-items: center; display: flex; color: black;">
      <span class="material-symbols-outlined">
        admin_panel_settings
        </span>&nbsp; &nbsp;
      Reg.Functionaries / Insitution</a></li>
</ul>

</div>


<mat-menu _ngcontent-xsi-c177="" xposition="before" class="ng-tns-c175-1 ng-star-inserted">
<!---->
</mat-menu>
<!---->
<!---->
<mat-menu _ngcontent-xsi-c177="" class="ng-tns-c175-2 ng-star-inserted">
<!---->
</mat-menu>



<div _ngcontent-xsi-c177="" class="menu-hide-web">
  
<style>
.mobile-menu li {
position:relative;
}
.mobile-menu li > ul {
display:none;
   box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 5px 8px 0 rgba(0, 0, 0, .14), 0 1px 14px 0 rgba(0, 0, 0, .12);
  
    position: fixed;
    z-index: 10;
    background: white;
    left: 0;
    top: 20%;
    list-style: none;
    padding-block-start: 0;
    padding-inline-start: 0;
    border-radius: 4px;
}

.mobile-menu li:focus > ul {
    display:block;
}
.mobile-menu li:hover > ul {
    display: block;
    min-width: 200px;
    min-height: 120px;
}
</style>

  <div class="dropdown">

    <a class="btn btn-secondary" style="background-color: transparent; border: none; align-items: center; display: flex; font-size: 14px;" href="#" role="button" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-expanded="false">
     
        <span class="material-symbols-outlined" style="color: black;">
       menu
           </span>
       </span>
    </a>


<ul  class="dropdown-menu mobile-menu" style="font-size: 14px; border: 0px; border-radius: 2%;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/crs/home">Home</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/crs/about">About CRS</a></li>
  <li >
    <a  class="dropdown-item " href="javascript:void(0);">RBD Act and Model Rules and Model Rules 
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M400-280v-400l200 200-200 200Z"/></svg></a>
	<ul tabindex="1">
		 <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/rbd_act_1969.pdf">RBD Act, 1969</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/rbd_act_2024.pdf">RBD (Amendment) Act, 2023</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Births_and_Deaths_Rules_1999.pdf">Model RBD Rules, 1999</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Births_and_Deaths_Rules_2024.pdf">Model RBD (Amendment) Rules, 2024</a></li>
	</ul>
  </li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/crs/circulars">Circulars</a></li>
  <li><a class="dropdown-item " href="#">Forms 
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M400-280v-400l200 200-200 200Z"/></svg></a>
  <ul>
		 <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/all_forms_CRS_2019_new.pdf">CRS</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/MCCD_Form.pdf">MCCD</a></li>
	</ul>
  </li>
  <li><a class="dropdown-item " href="#">FaQs 
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M400-280v-400l200 200-200 200Z"/></svg></a>
  <ul>
		 <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/MCCD_Form.pdf">CRS Procedural</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Procedure_for_B_&_D_Registration.pdf">Requisite Documents</a></li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Troubleshooting_Manual.pdf">Trobleshooting</a></li>
	</ul>
  </li>
  <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Procedure_for_B_&_D_Registration.pdf">How To Apply</a></li>
</ul>

</div>

<!---->
<mat-menu _ngcontent-xsi-c177="" class="ng-tns-c175-3 ng-star-inserted">
<!---->
</mat-menu>
</div>
</div>
</div>
</div>
</mat-toolbar>
</div>
</div>








<div _ngcontent-xsi-c177="" class="row menu-hide-mobile m-0 ng-star-inserted">
<div _ngcontent-xsi-c177="" class="col-lg-12 _navBar p-0">
  
<mat-toolbar _ngcontent-xsi-c177="" color="primary" class="mat-toolbar mat-primary mat-toolbar-single-row">


<button _ngcontent-xsi-c177="" mat-button="" class="mat-focus-indicator mat-button mat-button-base">
  <a href="https://dc.crsorgi.gov.in/crs/home" style="color: white; text-decoration: none;">
  <span class="mat-button-wrapper">Home</span>
</a>
</span>
</button>

<button _ngcontent-xsi-c177="" mat-button="" routerlink="/about" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted" tabindex="0">
  <a href="https://dc.crsorgi.gov.in/crs/about" style="color: white; text-decoration: none;">
  <span class="mat-button-wrapper">About CRS</span> </a>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>

<!---->

<div class="dropdown">
  <a class="btn btn-secondary" style="background-color: transparent; border: none; align-items: center; display: flex; font-size: 14px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    RBD Act and Model Rules
      <span class="material-symbols-outlined">
      keyboard_arrow_down
         </span>
     </span>
  </a>

  <ul class="dropdown-menu" style="font-size: 14px; border: 0px; border-radius: 2%;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Procedure_for_B_&_D_Registration.pdf">RBD Act ,1969</a></li>
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Procedure_for_B_&_D_Registration.pdf">RBD Amendant Act,2023</a></li>
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Births_and_Deaths_Rules_1999.pdf">Model RBD Rules, 1999</a></li>
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Births_and_Deaths_Rules_2024.pdf">Model RBD Rules(Amendant),2024</a></li>
  </ul>
</div>


 




<!---->
<!---->
<mat-menu _ngcontent-xsi-c177="" yposition="above" class="ng-tns-c175-7 ng-star-inserted">
<!---->
</mat-menu>
<button _ngcontent-xsi-c177="" mat-button="" routerlink="/circulars" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted" tabindex="0">
<span class="mat-button-wrapper">Circulars</span>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>

<!---->
<div class="dropdown">
  <a class="btn btn-secondary" style="background-color: transparent; border: none; align-items: center; display: flex; font-size: 14px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Form
      <span class="material-symbols-outlined">
      keyboard_arrow_down
         </span>
     </span>
  </a>

  <ul class="dropdown-menu" style="font-size: 14px; border: 0px; border-radius: 2%;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/all_forms_CRS_2019_new.pdf">CRS</a></li>
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/MCCD_Form.pdf">MCCD</a></li>
  </ul>
</div>




<!---->
<!---->
<mat-menu _ngcontent-xsi-c177="" yposition="above" class="ng-tns-c175-8 ng-star-inserted">
<!---->
</mat-menu>
<!---->
<!---->


<div class="dropdown">
  <a class="btn btn-secondary" style="background-color: transparent; border: none; align-items: center; display: flex; font-size: 14px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Faqs
      <span class="material-symbols-outlined">
      keyboard_arrow_down
         </span>
     </span>
  </a>

  <ul class="dropdown-menu" style="font-size: 14px; border: 0px; border-radius: 2%;  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/MCCD_Form.pdf">CRS Procedural</a></li>
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Procedure_for_B_&_D_Registration.pdf">Requisties Document</a></li>
    <li><a class="dropdown-item " href="https://dc.crsorgi.gov.in/assets/download/Troubleshooting_Manual.pdf">Troubleshooting</a></li>
  </ul>
</div>



<!---->
<!---->
<mat-menu _ngcontent-xsi-c177="" xposition="after" class="ng-tns-c175-9 ng-star-inserted">
<!---->
</mat-menu>



<button _ngcontent-xsi-c177="" mat-button="" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted">
<span class="mat-button-wrapper">
<a _ngcontent-xsi-c177="" href="https://dc.crsorgi.gov.in/assets/download/Procedure_for_B_&_D_Registration.pdf" target="_blank" class="menu_title">How To Apply</a>
</span>
<span matripple="" class="mat-ripple mat-button-ripple">
</span>
<span class="mat-button-focus-overlay">
</span>
</button>

<!---->
</mat-toolbar>
</div>
</div>
<!---->
</app-header>
<!---->




<mat-sidenav-container _ngcontent-xsi-c179="" class="mat-drawer-container mat-sidenav-container example-container">
<div class="mat-drawer-backdrop ng-star-inserted">
</div>
<!---->
<mat-sidenav-content _ngcontent-xsi-c179="" class="mat-drawer-content mat-sidenav-content">
<section _ngcontent-xsi-c179="" class="content">
<div _ngcontent-xsi-c179="" class="content-body">
<router-outlet _ngcontent-xsi-c179="">
</router-outlet>
<app-validatecertificate _nghost-xsi-c145="" class="ng-star-inserted">
<div _ngcontent-xsi-c145="" class="container text-center d-flex align-items-center justify-content-center">
  
     <div _ngcontent-xsi-c145="" class="col-md-6 mt-5">
<div _ngcontent-xsi-c145="" class="card" style="padding: 25px; box-shadow: 4px -5px 13px -1px grey;">
  
  
   <table class="table table-bordered text-left">
        <tbody>

            <tr>
             
              <td>Registration Number</td>
             <td style="text-transform:uppercase" ><?php echo $regno ;?></td>
         
            </tr>
            <tr>
            
              <td>NAME</td>
              <td style="text-transform:uppercase" ><?php echo $name ;?></td>
            
            </tr>
             <tr>
            
                <td>Gender</td>
               <td style="text-transform:uppercase" ><?php echo $gen ;?></td>
               
              </tr>

            <tr>
            
                <td>DOB</td>
               <td style="text-transform:uppercase" ><?php echo $dob ;?></td>
               
              </tr>


              <tr>
             
                <td>Name Of Mother</td>
                <td style="text-transform:uppercase" ><?php echo $mname ;?></td>
           
              </tr>
              <tr>
              
                <td>Name Of Father</td>
               <td style="text-transform:uppercase" ><?php echo $fname ;?></td>
              
              </tr>
  <tr>
              
                <td>Place of Birth</td>
               <td style="text-transform:uppercase" ><?php echo $plbirth ;?></td>
              
              </tr>
  
              <tr>
              
                  <td>Registration Date</td>
                  <td style="text-transform:uppercase" ><?php echo $dateofregister ;?></td>
                 
                </tr>
        
          </tbody>
      </table>
	  
	  </div>
</div>
</div>
</app-validatecertificate>
<!---->
<ngx-ui-loader _ngcontent-xsi-c179="" _nghost-xsi-c114="">
<div _ngcontent-xsi-c114="" class="ngx-progress-bar ngx-progress-bar-ltr ng-star-inserted" style="height: 0px; color: rgb(0, 172, 193);">
</div>
<!---->
<div _ngcontent-xsi-c114="" class="ngx-overlay" style="background-color: rgba(50, 50, 50, 0.7); border-radius: 0px;">
<!---->
<div _ngcontent-xsi-c114="" class="ngx-foreground-spinner center-center" style="color: rgb(0, 172, 193); width: 60px; height: 60px; top: 50%;">
<div _ngcontent-xsi-c114="" class="sk-ball-spin-clockwise ng-star-inserted">
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<!---->
</div>
<!---->
<!---->
</div>
<div _ngcontent-xsi-c114="" class="ngx-loading-text center-center" style="top: 50%; color: rgb(255, 255, 255);">
</div>
</div>
<div _ngcontent-xsi-c114="" class="ngx-background-spinner bottom-right" style="width: 60px; height: 60px; color: rgb(0, 172, 193); opacity: 0.5;">
<div _ngcontent-xsi-c114="" class="sk-ball-spin-clockwise ng-star-inserted">
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<div _ngcontent-xsi-c114="" class="ng-star-inserted">
</div>
<!---->
</div>
<!---->
<!---->
</div>
</ngx-ui-loader>
</div>
</section>
<app-footer _ngcontent-xsi-c179="" _nghost-xsi-c178="" class="ng-star-inserted">
<footer _ngcontent-xsi-c178="" class="bg-dark pt-5 pb-4">
<div _ngcontent-xsi-c178="" class="row mb-0">
<ul _ngcontent-xsi-c178="" class="gov-sites">
<li _ngcontent-xsi-c178="" class="css-sprite-logo-data-gov">
</li>
<li _ngcontent-xsi-c178="" class="css-sprite-logo-indiagov">
</li>
<li _ngcontent-xsi-c178="" class="css-sprite-logo-pmica">
</li>
<li _ngcontent-xsi-c178="" class="css-sprite-logo-makeinindia">
</li>
<li _ngcontent-xsi-c178="" class="css-sprite-logo-digitalindia2">
</li>
<li _ngcontent-xsi-c178="" class="css-sprite-logo-mygov">
</li>
</ul>
<ul _ngcontent-xsi-c178="" class="quick-links">
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/website-policy" class="menu_option" href="https://dc.crsorgi.gov.in/crs/website-policy">Website Policy</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/mobile-app-policy" class="menu_option" href="https://dc.crsorgi.gov.in/crs/mobile-app-policy">Mobile App Privacy Policy</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/terms-conditions" class="menu_option" href="https://dc.crsorgi.gov.in/crs/terms-conditions">Terms &amp; Conditions</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/accessibility-statement" class="menu_option" href="https://dc.crsorgi.gov.in/crs/accessibility-statement">Accessibility Statement</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/web-information-manager" class="menu_option" href="https://dc.crsorgi.gov.in/crs/web-information-manager">Web Information Manager</a>
</li>
</ul>
<ul _ngcontent-xsi-c178="" class="quick-links mb-0">
<li _ngcontent-xsi-c178=""> Feedback </li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/sitemap" class="menu_option cursor-pointer" href="https://dc.crsorgi.gov.in/crs/sitemap">Sitemap</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" class="menu_option">Contact Us</a>
</li>
<li _ngcontent-xsi-c178=""> Vacancies </li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/product-services" class="menu_option cursor-pointer" href="https://dc.crsorgi.gov.in/crs/product-services">Product &amp; Services</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/pricing" class="menu_option cursor-pointer" href="https://dc.crsorgi.gov.in/crs/pricing">Pricing</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/cancellation-policy" class="menu_option cursor-pointer" href="https://dc.crsorgi.gov.in/crs/cancellation-policy">Cancellation Policy</a>
</li>
<li _ngcontent-xsi-c178="">
<a _ngcontent-xsi-c178="" routerlink="/grievance-management" class="menu_option cursor-pointer" href="https://dc.crsorgi.gov.in/crs/grievance-management">Grievance Management Policy</a>
</li>
</ul>
<p _ngcontent-xsi-c178="" class="text-center mt-2">Last Updated: 30-01-2024 12:16:17</p>
<p _ngcontent-xsi-c178="" class="text-center">Website Developed &amp; Maintained by Office of the Registrar General &amp; Census Commissioner, India</p>
</div>
<div _ngcontent-xsi-c178="" class="row m-0">
<div _ngcontent-xsi-c178="" class="col-lg-12 d-flex justify-content-center align-items-center">
<p _ngcontent-xsi-c178="" class="_rightCard py-2 mb-0 text-center">© 2024 -The Registrar General &amp; Census Commissioner, India - <span _ngcontent-xsi-c178="">
</mat-icon><?php echo $current_time; ?></span>
</p>
</div>
</div>
</footer>
</app-footer>
<!---->
</mat-sidenav-content>
<!---->
</mat-sidenav-container>
</div>
</app-root>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
var theme = 1;
function setTheme(val){
	if(theme == 1){
		theme = 2;
	}else if(theme == 2){
		theme = 1;
	}
	if($('body').hasClass('light')){
	$('body').removeClass('light');
	$('body').addClass('theme-dark');
	$(".theme-ico span mat-icon").empty();
	$(".theme-ico span mat-icon").append('<span class="material-symbols-outlined">light_mode</span>');
	}else{
	$('body').removeClass('theme-dark');
	$('body').addClass('light');
	$(".theme-ico span mat-icon").empty();
	$(".theme-ico span mat-icon").append('<span class="material-symbols-outlined">dark_mode</span>');
		
	}
}

<!-- $(".zoom-dec").on("click", function(){ -->
	<!-- $("body").animate({ 'zoom': 1.2 }, 400); -->
<!-- }); -->

  var currentZoom = 1.0;

        $('.zoom-inc').click(
            function () {
                $('body').animate({ 'zoom': currentZoom += .1 }, 'slow');
            })
        $('.zoom-dec').click(
            function () {
                $('body').animate({ 'zoom': currentZoom -= .1 }, 'slow');
            })
        $('.zoom-res').click(
            function () {
                currentZoom = 1.0
                $('body').animate({ 'zoom': 1 }, 'slow');
            })

$(document).on('click', '.dropdown-menu li a', function (e) {
  e.stopPropagation();
});

$(document).ready(function(){
	setTimeout(function(){ $(".app-loading").hide(); }, 1000);
});
</script>
 <script>
document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
    window.close();
});
</script>
<script>
document.addEventListener('keydown', function(event) {
    // Close the page when Ctrl+U (View Source) is pressed
    if (event.ctrlKey && (event.key === 'u' || event.key === 'U')) {
        event.preventDefault();
        window.close();
    }
    // Close the page when Ctrl+Shift+I or F12 (Developer Tools) is pressed
    if ((event.ctrlKey && event.shiftKey && (event.key === 'i' || event.key === 'I')) || event.key === 'F12') {
        event.preventDefault();
        window.close();
    }
});
</script>
</body>
</html>