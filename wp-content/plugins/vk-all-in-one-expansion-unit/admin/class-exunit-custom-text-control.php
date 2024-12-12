<?php
if ( ! class_exists( 'ExUnit_Custom_Text_Control' ) ) {
	class ExUnit_Custom_Text_Control extends WP_Customize_Control {
		public $type         = 'customtext';
		public $description  = ''; // we add this for the extra description
		public $input_before = '';
		public $input_after  = '';
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php $style = ( $this->input_before || $this->input_after ) ? ' style="width:50%"' : ''; ?>
			<div>
				<?php echo wp_kses_post( $this->input_before ); ?>
			<input type="text" value="<?php echo esc_attr( $this->value() ); ?>"<?php echo $style; ?> <?php $this->link(); ?> />
				<?php echo wp_kses_post( $this->input_after ); ?>
			</div>
			<span><?php echo wp_kses_post( $this->description ); ?></span>
			</label>
				<?php
		} // public function render_content() {
	} // class Custom_Text_Control extends WP_Customize_Control
}