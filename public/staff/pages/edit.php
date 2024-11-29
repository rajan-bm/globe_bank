<?php require_once('../../../private/initialize.php'); ?>

<?php

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
} else {
    $id = $_GET['id'];
}

$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

if (is_post_request()) {
    // handle form values sent by new.php
    $menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $visible = isset($_POST['visible']) ? $_POST['visible'] : '';

    echo "Form Parameters<br />";
    echo "Menu Name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
}
?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">
        &laquo; Back to List
    </a>
    <div class="page edit">
        <h1>Edit Page</h1>
        <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>" /></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position" id="">
                        <option value="1">1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" />
                </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Edit Pages" />
            </div>
        </form>
    </div>
</div>