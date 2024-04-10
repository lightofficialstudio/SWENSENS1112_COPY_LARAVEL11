@extends('front-end.layouts.main')
@section('title', 'สมัครสมาชิก')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/layouts/register.css') }}">
@endsection
@section('content')
    <section data-v-466148b6="" class="site-body ant-layout" style="padding: 40px 0px;">
        <section data-v-466148b6="" class="ant-layout">
            <main data-v-466148b6="" class="ant-layout-content" style="padding: 0px; margin: 0px;">
                <div data-v-1e92e2d0="" data-v-466148b6="" class="container">
                    <div data-v-1e92e2d0="" class="box-register">
                        <div data-v-1e92e2d0="" class="box-header"
                            style="background-image: url('https://swensens1112.com/images/card-head.png');">
                            <div data-v-1e92e2d0="" class="content">
                                <h2 data-v-1e92e2d0="">สร้างบัญชี</h2>
                                <p data-v-1e92e2d0="">สมัครสมาชิกและเริ่มใช้งาน</p>
                            </div>
                        </div>
                        <div data-v-1e92e2d0="" class="box-body">
                            <div data-v-1e92e2d0="" id="register" class="register-form">
                                <form data-v-1e92e2d0=""
                                    class="register-form ant-form ant-form-horizontal ant-form-hide-required-mark"
                                    id="register-form" method="post">
                                    <div data-v-1e92e2d0="" class="ant-row" style="margin-left: -8px; margin-right: -8px;">
                                        <div data-v-1e92e2d0="" class="ant-col ant-col-12"
                                            style="padding-left: 8px; padding-right: 8px;">
                                            <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-label"><label title="ชื่อ"
                                                        class="ant-form-item-required ant-form-item-no-colon">ชื่อ</label>
                                                </div>
                                                <div class="ant-col ant-form-item-control-wrapper">
                                                    <div class="ant-form-item-control"><span
                                                            class="ant-form-item-children"><input data-v-1e92e2d0=""
                                                                placeholder="กรอกชื่อ" type="text"
                                                                class="ant-input"></span><!----></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-1e92e2d0="" class="ant-col ant-col-12"
                                            style="padding-left: 8px; padding-right: 8px;">
                                            <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-label"><label title="นามสกุล"
                                                        class="ant-form-item-required ant-form-item-no-colon">นามสกุล</label>
                                                </div>
                                                <div class="ant-col ant-form-item-control-wrapper">
                                                    <div class="ant-form-item-control"><span
                                                            class="ant-form-item-children"><input data-v-1e92e2d0=""
                                                                placeholder="กรอกนามสกุล" type="text"
                                                                class="ant-input"></span><!----></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-label"><label title="เบอร์โทรศัพท์"
                                                class="ant-form-item-no-colon">เบอร์โทรศัพท์</label></div>
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children"><input
                                                        data-v-1e92e2d0="" placeholder="กรอกเบอร์โทรศัพท์" type="tel"
                                                        class="ant-input"></span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-label"><label title="อีเมล"
                                                class="ant-form-item-required ant-form-item-no-colon">อีเมล</label></div>
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children"><input
                                                        data-v-1e92e2d0="" placeholder="กรอกอีเมล" type="email"
                                                        class="ant-input"></span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="warning-email-input">
                                        <div data-v-1e92e2d0="" class="warning-text"><span
                                                data-v-1e92e2d0="">กรุณาตรวจสอบอีเมลที่ระบุให้ถูกต้อง</span></div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-label"><label title="รหัสผ่าน"
                                                class="ant-form-item-required ant-form-item-no-colon">รหัสผ่าน</label></div>
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children"><span
                                                        data-v-1e92e2d0=""
                                                        class="ant-input-affix-wrapper ant-input-password"><input
                                                            placeholder="กรอกรหัสผ่าน" type="password"
                                                            class="ant-input"><span class="ant-input-suffix"><i
                                                                aria-label="icon: eye-invisible" tabindex="-1"
                                                                class="anticon anticon-eye-invisible ant-input-password-icon"><svg
                                                                    viewBox="64 64 896 896" data-icon="eye-invisible"
                                                                    width="1em" height="1em" fill="currentColor"
                                                                    aria-hidden="true" focusable="false" class="">
                                                                    <path
                                                                        d="M942.2 486.2Q889.47 375.11 816.7 305l-50.88 50.88C807.31 395.53 843.45 447.4 874.7 512 791.5 684.2 673.4 766 512 766q-72.67 0-133.87-22.38L323 798.75Q408 838 512 838q288.3 0 430.2-300.3a60.29 60.29 0 0 0 0-51.5zm-63.57-320.64L836 122.88a8 8 0 0 0-11.32 0L715.31 232.2Q624.86 186 512 186q-288.3 0-430.2 300.3a60.3 60.3 0 0 0 0 51.5q56.69 119.4 136.5 191.41L112.48 835a8 8 0 0 0 0 11.31L155.17 889a8 8 0 0 0 11.31 0l712.15-712.12a8 8 0 0 0 0-11.32zM149.3 512C232.6 339.8 350.7 258 512 258c54.54 0 104.13 9.36 149.12 28.39l-70.3 70.3a176 176 0 0 0-238.13 238.13l-83.42 83.42C223.1 637.49 183.3 582.28 149.3 512zm246.7 0a112.11 112.11 0 0 1 146.2-106.69L401.31 546.2A112 112 0 0 1 396 512z">
                                                                    </path>
                                                                    <path
                                                                        d="M508 624c-3.46 0-6.87-.16-10.25-.47l-52.82 52.82a176.09 176.09 0 0 0 227.42-227.42l-52.82 52.82c.31 3.38.47 6.79.47 10.25a111.94 111.94 0 0 1-112 112z">
                                                                    </path>
                                                                </svg></i></span></span></span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-label"><label title="เพศ (ไม่ระบุได้)"
                                                class="ant-form-item-required ant-form-item-no-colon">เพศ
                                                (ไม่ระบุได้)</label></div>
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children">
                                                    <div data-v-1e92e2d0=""
                                                        class="gender-radio-group ant-radio-group ant-radio-group-solid ant-radio-group-default">
                                                        <label data-v-1e92e2d0="" class="ant-radio-button-wrapper"><span
                                                                class="ant-radio-button"><input type="radio"
                                                                    name="gender" class="ant-radio-button-input"
                                                                    value="Male"><span
                                                                    class="ant-radio-button-inner"></span></span><span>
                                                                ชาย
                                                            </span></label><label data-v-1e92e2d0=""
                                                            class="ant-radio-button-wrapper"><span
                                                                class="ant-radio-button"><input type="radio"
                                                                    name="gender" class="ant-radio-button-input"
                                                                    value="Female"><span
                                                                    class="ant-radio-button-inner"></span></span><span>
                                                                หญิง
                                                            </span></label><label data-v-1e92e2d0=""
                                                            class="ant-radio-button-wrapper ant-radio-button-wrapper-checked"><span
                                                                class="ant-radio-button ant-radio-button-checked"><input
                                                                    type="radio" name="gender"
                                                                    class="ant-radio-button-input" value="Other"><span
                                                                    class="ant-radio-button-inner"></span></span><span>
                                                                ไม่ระบุ
                                                            </span></label>
                                                    </div>
                                                </span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-label"><label title="ของขวัญวันเกิดรอคุณอยู่"
                                                class="ant-form-item-no-colon">ของขวัญวันเกิดรอคุณอยู่</label></div>
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children"><span
                                                        data-v-1e92e2d0="" class="ant-calendar-picker">
                                                        <div class=""><input placeholder="dd/mm/yyyy"
                                                                type="date"
                                                                class="ant-calendar-picker-input ant-input"><i
                                                                aria-label="icon: calendar"
                                                                class="anticon anticon-calendar ant-calendar-picker-icon"><svg
                                                                    viewBox="64 64 896 896" data-icon="calendar"
                                                                    width="1em" height="1em" fill="currentColor"
                                                                    aria-hidden="true" focusable="false" class="">
                                                                    <path
                                                                        d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32zm-40 656H184V460h656v380zM184 392V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128v136H184z">
                                                                    </path>
                                                                </svg></i></div>
                                                    </span></span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="confirm-checkbox ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children"><label
                                                        data-v-1e92e2d0="" class="ant-checkbox-wrapper"><span
                                                            class="ant-checkbox"><input type="checkbox"
                                                                class="ant-checkbox-input" value=""><span
                                                                class="ant-checkbox-inner"></span></span><span>
                                                            ฉันได้อ่านและยอมรับ <a data-v-1e92e2d0=""
                                                                href="#">ข้อกำหนดการใช้งาน</a> และ <a
                                                                data-v-1e92e2d0=""
                                                                href="#">นโยบายความเป็นส่วนตัว</a> ของสเวนเซ่นส์
                                                        </span></label></span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="confirm-checkbox ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span class="ant-form-item-children"><label
                                                        data-v-1e92e2d0="" class="ant-checkbox-wrapper "><span
                                                            class="ant-checkbox"><input type="checkbox"
                                                                class="ant-checkbox-input" value=""><span
                                                                class="ant-checkbox-inner"></span></span><span>
                                                            ฉันยินยอมรับข้อมูลข่าวสาร กิจกรรมส่งเสริมการขายต่างๆ
                                                            จากสเวนเซ่นส์และ<a data-v-1e92e2d0=""
                                                                href="#">บริษัทในเครือ</a>
                                                            โดยเราจะเก็บข้อมูลของท่านไว้เป็นความลับ
                                                            สามารถศึกษาเงื่อนไขหรือข้อตกลง <a data-v-1e92e2d0=""
                                                                href="#">นโยบายความเป็นส่วนตัว</a>
                                                            เพิ่มเติมได้ที่เว็บไซต์ของบริษัทฯ
                                                        </span></label></span><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-1e92e2d0="" class="ant-row ant-form-item"
                                        style="margin-top: 24px; margin-bottom: 0px;">
                                        <div class="ant-col ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control"><span
                                                    class="ant-form-item-children"><button data-v-1e92e2d0=""
                                                        type="submit"
                                                        class="register-form-button ant-btn ant-btn-primary ant-btn-block"><span>สมัครสมาชิก</span></button></span><!---->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!----> <!----> <!----> <!---->
                </div>
            </main>
        </section> <!---->
    </section>
@endsection
@push('scripts')
    {{-- select gender --}}
    <script>
        document.querySelectorAll('input[name="gender"]').forEach(radio => {
            radio.addEventListener('change', function() {
                // ลบ class "ant-radio-button-wrapper-checked" จากทุก label
                document.querySelectorAll('.gender-radio-group .ant-radio-button-wrapper').forEach(
                    label => {
                        label.classList.remove('ant-radio-button-wrapper-checked');
                    });

                // เพิ่ม class "ant-radio-button-wrapper-checked" ให้กับ label ที่เลือก
                this.closest('.ant-radio-button-wrapper').classList.add('ant-radio-button-wrapper-checked');
            });
        });
    </script>
    {{-- click checkbox --}}
    <script>
        document.querySelectorAll('.ant-checkbox-wrapper').forEach(checkboxWrapper => {
            checkboxWrapper.addEventListener('click', function() {
                // ตรวจสอบสถานะ checked ของ input type checkbox
                const input = this.querySelector('.ant-checkbox-input');
                if (input.checked) {
                    // เพิ่ม class "ant-checkbox-checked" ถ้า checkbox ถูกเลือก
                    this.classList.add('ant-checkbox-checked');
                } else {
                    // ลบ class "ant-checkbox-checked" ถ้า checkbox ไม่ถูกเลือก
                    this.classList.remove('ant-checkbox-checked');
                }
            });
        });
    </script>
    {{-- check password --}}
    <script>
        // เลือกไอคอนตาทั้งหมดที่ใช้สำหรับ toggle การแสดงรหัสผ่าน
        document.querySelectorAll('.ant-input-password-icon').forEach(toggleIcon => {
            toggleIcon.addEventListener('click', function() {
                // เลือก input ที่เกี่ยวข้องกับไอคอนนี้
                const passwordInput = this.parentNode.previousElementSibling;

                // ตรวจสอบประเภทปัจจุบันของ input และสลับ
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    // เปลี่ยนไอคอนเป็น "eye"
                } else {
                    passwordInput.type = 'password';
                    // เปลี่ยนไอคอนเป็น "eye-invisible"
                }
            });
        });
    </script>
@endpush
