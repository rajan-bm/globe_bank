<?php require_once('../../../private/initialize.php'); ?>

<?php

// $test = isset($_GET['test']) ? $_GET['test'] : '';
// if ($test == '404') {
//     error_404();
// } elseif ($test == '500') {
//     error_500();
// } elseif ($test == 'redirect') {
//     redirect_to(url_for('/staff/pages/index.php'));
// }

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
} else {
    redirect_to(url_for('/staff/subjects/index.php'));
}

$page_title = 'Create Page';
?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">
    <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">
        &laquo; Back to List
    </a>
    <div class="page new">
        <h1>Create Page</h1>
        <form action="<?php echo url_for('/staff/pages/new.php'); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?php echo h($menu_name); ?>" /></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position" id="">
                        <option value="1" <?php if ($position == '1') echo 'selected="selected"'; ?>>1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" <?php if ($visible == '1') echo 'checked="checked"'; ?> />
                </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Create Page" />
            </div>
        </form>
    </div>
</div>