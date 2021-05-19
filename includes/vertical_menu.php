<div class="vertical-menu vertical-category-block">
    <div class="block-title">
        <span class="menu-icon">
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
        </span>
        <span class="menu-title">All departments</span>
        <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
    </div>
    <div class="wrap-menu">
        <ul class="menu clone-main-menu">
        <?php 
            foreach($ctgDatas as $ctgData){
        ?>
            <li class="menu-item menu-item-has-children has-megamenu">
                <a href="category.php?status=catView&&id=<?php echo $ctgData['ctg_id']; ?>" class="menu-name" data-title="<?php echo $ctgData['ctg_name']; ?>"><?php echo $ctgData['ctg_name']; ?></a>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>