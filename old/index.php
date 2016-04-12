<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>test site</title>

        <?php include 'include/view/view-css.php' ?>

    </head>
    <body>
        <div class="nr site-content">
            <?php include 'include/view/view-header.php' ?>
            <?php include 'include/view/sidebar/view-sidebar-master.php' ?>
            <div class="nr main-section">
                <div class="nr main-section-top-bar">
                    <ul class="col-sm-6 col-xs-12 breadcrumbs-list">
                        <li class="breadcrumbs-item">
                            <a class="breadcrumbs-link" href="index.php">Welcome</a>
                            <span class="breadcrumbs-arrow">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </li>
                        <li class="breadcrumbs-item">
                            <span class="breadcrumbs-text">Prima Pagina </span>
                            <span class="breadcrumbs-arrow hidden">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="nr filter-bar">
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 filter-section money-value-range-wrap">
                        <p class="nr section-title">Pret</p>
                        <div class="nr money-value-curency">
                            <p>
                                <a href="javascript:;" class="money-value-curency-ron active">ron</a> 
                                <span>|</span> 
                                <a href="javascript:;" class="money-value-curency-eur">eur</a> 
                            </p>
                        </div>
                        <div class="nr money-value-input-wrap">
                            <div class="col-xs-5">
                                <input type="text" placeholder="min" class="form-control input-sm">
                            </div>
                            <div class="col-xs-2 money-separator">-</div>
                            <div class="col-xs-5">
                                <input type="text" placeholder="max" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="nr no-money-filters">
                            <a href="javascript:;" class="without-filter">fara pret</a> 
                            <span>|</span> 
                            <a href="javascript:;" class="free-filter">gratuit</a> 
                            <span>|</span> 
                            <a href="javascript:;" class="donation-filter">donatie</a> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/view/view-js.php' ?>
    </body>
</html>