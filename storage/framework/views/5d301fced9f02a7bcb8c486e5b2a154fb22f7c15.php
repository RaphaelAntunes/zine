<?php $__env->startPush('css-page'); ?>
    <?php echo $__env->make('Chatify::layouts.headLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php
    $setting = \App\Models\Utility::colorset();
    $color = (!empty($setting['color'])) ? $setting['color'] : 'theme-3';

?>


<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Messenger')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Messenger')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="messenger">

                        
                        <div class="messenger-listView">
                            
                            <div class="m-header">
                                <nav>
                                    <nav class="m-header-right">
                                        <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                                    </nav>
                                </nav>
                                
                                <input type="text" class="messenger-search" placeholder="Search" />
                                
                                <div class="messenger-listView-tabs">
                                    <a href="#" <?php if($route == 'user'): ?> class="active-tab" <?php endif; ?> data-view="users">
                                        <svg class="svg-inline--fa fa-clock fa-w-16" title="Recent" aria-labelledby="svg-inline--fa-title-JoqPdtylaC0E" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><title id="svg-inline--fa-title-JoqPdtylaC0E">Recent</title><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>
                                        
                                    </a>
                                    <a href="#" <?php if($route == 'group'): ?> class="active-tab" <?php endif; ?> data-view="groups">
                                        <svg class="svg-inline--fa fa-users fa-w-20" title="Members" aria-labelledby="svg-inline--fa-title-uU5Ic3YEEZcH" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><title id="svg-inline--fa-title-uU5Ic3YEEZcH">Members</title><path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
                                        
                                    </a>
                                </div>
                            </div>
                            
                            <div class="m-body">
                                
                                
                                <div class="<?php if($route == 'user'): ?> show <?php endif; ?> messenger-tab app-scroll" data-view="users">

                                    
                                    <div class="favorites-section">
                                        <p class="messenger-title"><?php echo e(__('Favorites')); ?></p>
                                        <div class="messenger-favorites app-scroll-thin"></div>
                                    </div>

                                    
                                    <?php echo view('Chatify::layouts.listItem', ['get' => 'saved','id' => $id])->render(); ?>


                                    
                                    <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>


                                </div>

                                

                                <div class="all_members <?php if($route == 'group'): ?> show <?php endif; ?> messenger-tab app-scroll" data-view="groups">
                                    
                                    <p style="text-align: center;color:grey;"><?php echo e(__('Soon will be available')); ?></p>
                                </div>
                                
                                <div class=" messenger-tab app-scroll" data-view="search">
                                    
                                    <p class="messenger-title">Search</p>
                                    <div class="search-records">
                                        <p class="message-hint center-el"><span>Type to search..</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="messenger-messagingView">
                            
                            <div class="m-header m-header-messaging">
                                <nav>
                                    
                                    <div style="display: inline-flex;">
                                        <a href="#" class="show-listView"><i class="ti ti-arrow-left"></i></a>
                                        <?php if(!empty(Auth::user()->avatar)): ?>
                                            <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px; background-image: url('<?php echo e(asset('/storage/avatars/'.Auth::user()->avatar)); ?>');">
                                            </div>
                                        <?php else: ?>
                                            <div class="avatar av-s header-avatar" style=" margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;background-image: url('<?php echo e(asset('/storage/avatars/avatar.png')); ?>');"></div>
                                        <?php endif; ?>
                                        <a href="#" class="user-name"><?php echo e(config('chatify.name')); ?></a>
                                    </div>
                                    
                                    <nav class="m-header-right">
                                        <a href="#" id="image" class="add-to-favorite  "><i id="foo" class="fa fa-star"></i></a>
                                        <a href="#" class="show-infoSide header-icon">
                                            <svg class="svg-inline--fa fa-info-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>
                                        </a>
                                    </nav>
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                                    <script>
                                        $('#image').click(function() {
                                            $('#foo').css({
                                                'color': '#FFC107'
                                            });
                                        });
                                    </script>
                                </nav>
                            </div>
                            
                            <div class="internet-connection">
                                <span class="ic-connected"><?php echo e(__('Connected')); ?></span>
                                <span class="ic-connecting"><?php echo e(__('Connecting...')); ?></span>
                                <span class="ic-noInternet"><?php echo e(__('Please add pusher settings for using messenger.')); ?></span>
                            </div>
                            
                            <div class="m-body app-scroll">
                                <div class="messages">
                                    <p class="message-hint" style="margin-top: calc(30% - 126.2px);"><span><?php echo e(__('Please select a chat to start messaging')); ?></span></p>
                                </div>
                                
                                <div class="typing-indicator">
                                    <div class="message-card typing">
                                        <p>
                                <span class="typing-dots">
                                    <span class="dot dot-1"></span>
                                    <span class="dot dot-2"></span>
                                    <span class="dot dot-3"></span>
                                </span>
                                        </p>
                                    </div>
                                </div>
                                
                                <?php echo $__env->make('Chatify::layouts.sendForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        
                        <div class="messenger-infoView app-scroll text-center">
                            
                            <nav>
                                <a href="#"><i class="fas fa-times"></i></a>
                            </nav>
                            <?php echo view('Chatify::layouts.info')->render(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-page'); ?>
    <?php echo $__env->make('Chatify::layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopPush(); ?>

<?php if($color == "theme-1"): ?>
    <style type="text/css">
        .m-list-active, .m-list-active:hover, .m-list-active:focus {
            background: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, rgba(255, 58, 110, 0.6) 99.86%), #51459d !important;
        }
        .mc-sender p {
            background: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, rgba(255, 58, 110, 0.6) 99.86%), #51459d !important;
        }

        .messenger-favorites div.avatar {
            box-shadow: 0px 0px 0px 2px #51459d !important;
        }
        .messenger-listView-tabs a, .messenger-listView-tabs a:hover, .messenger-listView-tabs a:focus {
            color: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, rgba(255, 58, 110, 0.6) 99.86%), #51459d !important;
        }
        .m-header svg {
            color: #51459d !important;
        }
        .active-tab {
            border-bottom: 2px solid #51459d !important;
        }
        .messenger-infoView nav a {

            color: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, rgba(255, 58, 110, 0.6) 99.86%), #51459d !important;
        }
        .lastMessageIndicator {
            color: #51459d !important;
        }

        .messenger-list-item td span .lastMessageIndicator {

            color: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, rgba(255, 58, 110, 0.6) 99.86%), #51459d !important;
            font-weight: bold;
        }
        .messenger-sendCard button svg {
            color: #51459d !important;
        }

    </style>
<?php endif; ?>


<?php if($color == "theme-2"): ?>
    <style type="text/css">
        .m-list-active, .m-list-active:hover, .m-list-active:focus {
            background: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, #4ebbd3 99.86%), #1f3996 !important;
        }
        .mc-sender p {
            background: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, #4ebbd3 99.86%), #1f3996 !important;
        }

        .messenger-favorites div.avatar {
            box-shadow: 0px 0px 0px 2px #1f3996 !important;
        }
        .messenger-listView-tabs a, .messenger-listView-tabs a:hover, .messenger-listView-tabs a:focus {
            color: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, #4ebbd3 99.86%), #1f3996 !important;
        }
        .m-header svg {
            color: #1f3996 !important;
        }
        .active-tab {
            border-bottom: 2px solid #1f3996 !important;
        }
        .messenger-infoView nav a {

            color: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, #4ebbd3 99.86%), #1f3996 !important;
        }
        .lastMessageIndicator {
            color: #1f3996 !important;
        }

        .messenger-list-item td span .lastMessageIndicator {

            color: linear-gradient(141.55deg, rgba(81, 69, 157, 0) 3.46%, #4ebbd3 99.86%), #1f3996 !important;
            font-weight: bold;
        }
        .messenger-sendCard button svg {
            color: #1f3996 !important;
        }

    </style>
<?php endif; ?>


<?php if($color == "theme-3"): ?>
    <style type="text/css">
        .m-list-active, .m-list-active:hover, .m-list-active:focus {
            background: linear-gradient(141.55deg, #6fd943 3.46%, #6fd943 99.86%), #6fd943 !important;
        }
        .mc-sender p {
            background: linear-gradient(141.55deg, #6fd943 3.46%, #6fd943 99.86%), #6fd943 !important;
        }

        .messenger-favorites div.avatar {
            box-shadow: 0px 0px 0px 2px #6fd943 !important;
        }
        .messenger-listView-tabs a, .messenger-listView-tabs a:hover, .messenger-listView-tabs a:focus {
            color:   #6fd943 !important;
        }
        .m-header svg {
            color: #6fd943 !important;
        }
        .active-tab {
            border-bottom: 2px solid #6fd943 !important;
        }
        .messenger-infoView nav a {

            color: linear-gradient(141.55deg, #6fd943 3.46%, #6fd943 99.86%), #6fd943 !important;
        }
        .lastMessageIndicator {
            color: #6fd943 !important;
        }

        .messenger-list-item td span .lastMessageIndicator {

            color:  #6fd943 !important;
            font-weight: bold;
        }
        .messenger-sendCard button svg {
            color: #6fd943 !important;
        }
        .m-list-active span, .m-list-active p {
            color: #fff !important;
        }
        .messenger-list-item.m-list-active td span .lastMessageIndicator{
            color: #fff !important;
        }


    </style>
<?php endif; ?>


<?php if($color == "theme-4"): ?>
    <style type="text/css">
        .m-list-active, .m-list-active:hover, .m-list-active:focus {
            background:linear-gradient(141.55deg, rgba(104, 94, 229, 0) 3.46%, #685ee5 99.86%), #584ed2 !important;
        }
        .mc-sender p {
            background: linear-gradient(141.55deg, rgba(104, 94, 229, 0) 3.46%, #685ee5 99.86%), #584ed2 !important;
        }

        .messenger-favorites div.avatar {
            box-shadow: 0px 0px 0px 2px #584ed2 !important;
        }
        .messenger-listView-tabs a, .messenger-listView-tabs a:hover, .messenger-listView-tabs a:focus {
            color: linear-gradient(141.55deg, rgba(104, 94, 229, 0) 3.46%, #685ee5 99.86%), #584ed2 !important;
        }
        .m-header svg {
            color: #584ed2 !important;
        }
        .active-tab {
            border-bottom: 2px solid  #584ed2 !important;
        }
        .messenger-infoView nav a {

            color: linear-gradient(141.55deg, rgba(104, 94, 229, 0) 3.46%, #685ee5 99.86%), #584ed2 !important;
        }
        .lastMessageIndicator {
            color: #584ed2 !important;
        }

        .messenger-list-item td span .lastMessageIndicator {

            color: linear-gradient(141.55deg, rgba(104, 94, 229, 0) 3.46%, #685ee5 99.86%), #584ed2 !important;
            font-weight: bold;
        }
        .messenger-sendCard button svg {
            color: #584ed2 !important;
        }

    </style>
<?php endif; ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\antunessx\Desktop\Nova pasta\ERP GO Saas\ERPGO\resources\views/vendor/Chatify/pages/app.blade.php ENDPATH**/ ?>