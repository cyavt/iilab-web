<template>
    <div id="wrapper">
        <side-menu></side-menu>

        <div id="page-wrapper" class="gray-bg dashbard-1">

            <Heading :title="headingTitle" :CheckRSidebar="CheckSidebar" />

            <!-- Content -->
            <slot name="content"></slot>
            <Footer :text="textFooter"></Footer>

        </div>

        <!-- Chat Box -->
        <chat-box-component v-if="CheckBox"></chat-box-component>

        <right-sidebar v-if="CheckSidebar"></right-sidebar>

    </div>
</template>

<script>
import Side from './layout/SideMenu';
import Footer from './layout/Footer';
import RightSidebar from './layout/RightSidebar';
import ChatBox from './plugins/ChatBox';
import Heading from './layout/Heading';

export default {
    name: "IndexHome",
    components: {
        "sideMenu": Side,
        "Footer": Footer,
        'rightSidebar': RightSidebar,
        'chat-box-component': ChatBox,
        'Heading': Heading,
    },
    props: {
        CheckBox: {
            type: Boolean,
            default: false
        },
        CheckSidebar: {
            type: Boolean,
            default: false
        },
        headingTitle: {
            type: String,
            default: "Chào mừng bạn đến với trang quản trị của IoT Innovation Lab"
        },
        textFooter: {
            type: String,
            default: "IoT Innovation Lab"
        },
    },
}
</script>
