<template>
    <index-component :CheckBox="true" :CheckSidebar="true">

        <template v-slot:content>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <notice-home></notice-home>
                    </div>
                </div>
            </div>
        </template>

    </index-component>
</template>

<script>
import IndexComponent from '../../IndexComponent';
import NoticeHome from './NoticeHome';

export default {
    name: "IndexHome",
    components: {
        "IndexComponent": IndexComponent,
        "notice-home": NoticeHome,
    },
    mounted() {
        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Hello Word', 'Welcome to Nguyễn Văn Trúc');
        }, 1000);
    },
}

</script>
