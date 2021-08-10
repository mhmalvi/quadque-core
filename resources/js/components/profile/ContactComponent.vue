<template lang="">
    <div class="col-lg-4">
        <div class="page-separator">
            <div class="page-separator__text">Contact Informations</div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input type="email" class="form-control" value="alexander.watson@fake-mail.com" placeholder="Your email address ..." id="email" readonly>
                <small class="form-text text-muted">Note that if you want to change your email, you have to contact to the admin</small>
            </div>
            <div class="form-group">
                <label class="form-label" for="phone">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number ..." id="phone">
            </div>
            <div class="form-group">
                <label class="form-label">Address</label>
                <textarea rows="3" class="form-control" placeholder="Enter your address ..." style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style lang="">
</style>