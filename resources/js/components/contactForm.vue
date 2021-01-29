<template>
  <div id="contact">
    <div class="error-message" v-for="error in errors" :key="error.id">{{ error.message }}</div>
        <form @submit.prevent="postInquiry">
            <!-- full_name -->
            <div>
                <label class="required">氏名</label>
                <input v-model.trim="fullName" type="text" placeholder="test_name" maxlength="255" required>
            </div>
            <!-- email -->
            <div>
                <label class="required">メールアドレス</label>
                <input v-model.trim="email" type="email" placeholder="test_mail" required>
            </div>
            <!-- buttun -->
            <div>
                <button>同意して問い合わせる</button>
            </div>


        </form>
        <div class="bg" @click.self="close" v-show="isShow">
          <div class="zoomImage slideIn">
            <b-img :src="src" fluid class="responsiveHeight" alt="Responsive image"></b-img>
            <button class="modal-btn" @click="close">
              <font-awesome-icon icon="times" />
            </button>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                errors: [],
                fullName: '',
                email: '',
                isShow: false
            }
        },
        methods: {
            postInquiry() {
                const url = '/api/mail/inquiry';
                const self = this;

                //axiosでPOST送信
                axios.post(url, this.fullName, this.email)
                .then(res => {
                    if(res.data.result) {
                        //メール送信完了画面に遷移する

                        this.$router.push("/portfolio")
                    } else {

                        self.errors = res.data.errors;
                    }
                })
                .catch(
                    err => {
                      this.isShow = true;
                        this.push(fullName);
                    }
                );
            },
            postValid() {
              this.isShow = true;
            },
            close: function() {
              this.isShow = false;
            },

    }
  }
</script>

<style>
#contact {
  text-align: center;
}
/* .bg {
  height: 500px;
  width: 500px;
  background-color: gray;
} */
</style>
