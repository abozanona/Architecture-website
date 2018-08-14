<div class="wrap">
	<?php self::load_view( 'backend/header' ); ?>
	<h3><?php _e( 'نموذج جديد', 'ultimate-form-builder-lite' ); ?></h3>
	<div class="ufbl-new-form-wrap">
		<div class="ufbl-add-field-wrap">
			<label><?php _e( 'عنوان النموذج', 'ultimate-form-builder-lite' ); ?></label>
			<div class="ufbl-field"><input type="text" class="ufbl-form-title" placeholder="<?php _e( 'اسم النموذج', 'ultimate-form-builder-lite' ); ?>"></div>
			<div class="ufbl-field-note"><?php _e( 'يرجى إدخال عنوان النموذج', 'ultimate-form-builder-lite' ); ?></div>
		</div>
		<div class="ufbl-add-field-wrap ufbl-add-submit-wrap">
			<input type="button" class="ufbl-form-add-btn button-primary" value="إضافة النموذج"><span class="ufbl-ajax-loader" style="display: none"></span><span class="ufbl-msg" style="display:none;">Form Created.Redirecting...</span>
			<div class="ufbl-add-error ufbl-error" style="display: none;"></div>
		</div>
	</div>
    <?php UFBL_Lib::load_view('backend/upgrade-block');?>
</div>

