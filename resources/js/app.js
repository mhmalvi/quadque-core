import { createApp } from "vue";
import BasicComponent from "./components/profile/BasicComponent.vue";
import ContactComponent from "./components/profile/ContactComponent.vue";
import PasswordComponent from "./components/profile/PasswordComponent.vue";
import ProfilePicture from "./components/profile/ProfilePicture.vue";
import CourseList from "./components/courses/CourseList.vue";
import CourseCreate from "./components/courses/CourseCreate.vue";

const app = createApp({});

app.component("basic-component", BasicComponent);
app.component("contact-component", ContactComponent);
app.component("password-component", PasswordComponent);
app.component("profile-picture", ProfilePicture);
app.component("course-list", CourseList);
app.component("course-create", CourseCreate);

app.mount("#app");

require("./bootstrap");

require("alpinejs");
