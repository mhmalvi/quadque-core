<template lang="">
    <div class="col-lg-4">
        <div class="page-separator">
            <div class="page-separator__text">Change Password</div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <div class="form-group">
                <label class="form-label" for="oldpassword">Old Password:</label>
                <input id="oldpassword" type="password" class="form-control" placeholder="Type your old password ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">New Password:</label>
                <input id="password" type="password" class="form-control" placeholder="Type a new password ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="password2">Confirm Password:</label>
                <input id="password2" type="password" class="form-control" placeholder="Confirm your new password ...">
            </div>
            <button type="submit" class="btn btn-primary">Save password</button>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style lang="">
</style>