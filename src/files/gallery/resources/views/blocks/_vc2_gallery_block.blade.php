<?php
    $id = 'vc-gallery-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'vc-gallery';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
    if( $is_preview ) {
        $className .= ' is-admin';
    }

    $padding_top = get_field('padding_top');
    $padding_bottom = get_field('padding_bottom');
    $background_image = get_field('background_image');
    $vc_heading = get_field('vc_heading');
    $heading_color = get_field('heading_color'); 
    $icon_left = get_field('icon_left'); 
    $icon_right = get_field('icon_right'); 
    $upload_image = get_field('upload_image');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image: url({{ $background_image }}); padding-top: {{$padding_top}}; padding-bottom: {{$padding_bottom}};">
    <div class="container">
        @if (!empty($vc_heading))
        <h3 class="heading-title" style="color: {{ $heading_color }}">
                <span class="icon icon-left">
                    <img src="{{ $icon_left }}" alt="">
                </span>
                <span>{{ $vc_heading }}</span>
                <span class="icon icon-right">
                    <img src="{{ $icon_right }}" alt="">
                </span>
                
            </h3>
        @endif
        <?php if( $upload_image ): ?>
            <div class="gallery nf-row row">
                <?php foreach( $upload_image as $image ): ?>
                    <div class="nf-col col-lg-4 col-md-6 col-12">
                        <div class="thumbnail">
                            <img src="{{ $image}}" alt="gallery">
                        </div>
                        
                    </div>
                <?php endforeach; ?>
                </div>
        <?php endif; ?>
    </div>
</div>