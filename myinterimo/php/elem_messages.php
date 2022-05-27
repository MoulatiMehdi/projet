<div class="toast-container position-absolute  top-0 start-50 p-4 translate-middle translate-middle-x"
     style="z-index:5; margin-top: 100px">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <?php
    include 'messages.php';
    if (isset($_SESSION['warning'])) {
        foreach ($_SESSION['warning'] as $key => $value) {
            msg_warning_toast($value);

        }
        unset($_SESSION['warning']);
    }
    if (isset($_SESSION['error'])) {
        foreach ($_SESSION['error'] as $key => $value) {
            msg_error_toast($value);
        }
        unset($_SESSION['error']);
    } else {

        if (isset($_SESSION['success'])) {
            foreach ($_SESSION['success'] as $value) {
                msg_success_toast($value);
            }
            unset($_SESSION['success']);
        }
    }

    ?>
</div>