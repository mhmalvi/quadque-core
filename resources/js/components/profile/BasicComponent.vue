<template lang="">
    <div class="col-lg-4">
        <div class="page-separator">
            <div class="page-separator__text">Personal Informations</div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <div class="form-group">
                <label class="form-label" for="username">User Name</label>
                <input type="text" class="form-control" placeholder="Enter your username ..." id="username">
            </div>
            <div class="form-group">
                <label class="form-label" for="firstname">First Name</label>
                <input type="text" class="form-control" placeholder="Enter your first name ..." id="firstname">
            </div>
            <div class="form-group">
                <label class="form-label" for="lastname">Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your last name ..." id="lastname">
            </div>
            <div class="form-group">
                <label class="form-label">About you</label>
                <textarea rows="3" class="form-control" placeholder="About you ..." style="resize: none;"></textarea>
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