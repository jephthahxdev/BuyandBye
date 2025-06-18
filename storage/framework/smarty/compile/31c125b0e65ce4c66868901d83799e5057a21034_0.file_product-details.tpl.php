<?php
/* Smarty version 5.5.1, created on 2025-06-18 23:31:28
  from 'file:product-details.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68534c506b24d9_02128590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31c125b0e65ce4c66868901d83799e5057a21034' => 
    array (
      0 => 'product-details.tpl',
      1 => 1750289486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68534c506b24d9_02128590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_63819854968534c5069d769_74686379', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_63819854968534c5069d769_74686379 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>

        <div class="container mx-auto px-4 py-6 mt-24">
                <nav class="text-sm text-gray-500 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="#" class="hover:text-gray-700">Browse Products</a></li>
                <li class="text-gray-400">></li>
                <li><a href="#" class="hover:text-gray-700">Women</a></li>
                <li class="text-gray-400">></li>
                <li class="text-gray-900">Jackets</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-4">
                                <div class="relative bg-gray-100 rounded-lg overflow-hidden aspect-square">
                    <button
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:shadow-lg transition-shadow z-10">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <img src="<?php echo $_smarty_tpl->getValue('product')['main_image'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['name'];?>
" class="w-full h-full object-cover">
                    <button
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:shadow-lg transition-shadow z-10">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                                <div class="grid grid-cols-4 gap-2">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['images'], 'image', false, NULL, 'thumbnails', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
?>
                        <div
                            class="bg-gray-100 rounded-lg overflow-hidden aspect-square cursor-pointer hover:opacity-80 transition-opacity">
                            <img src="<?php echo $_smarty_tpl->getValue('image')['thumb'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['name'];?>
" class="w-full h-full object-cover">
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

                        <div class="space-y-6">
                                <div>
                    <h1 class="text-3xl font-semibold text-gray-900 mb-2"><?php echo $_smarty_tpl->getValue('product')['name'];?>
</h1>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="flex items-center">
                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php if ($_smarty_tpl->getValue('i') <= $_smarty_tpl->getValue('product')['rating_full']) {?>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                    </svg>
                                <?php } elseif ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('product')['rating_full']+1 && $_smarty_tpl->getValue('product')['rating_half']) {?>
                                    <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20">
                                        <defs>
                                            <linearGradient id="half">
                                                <stop offset="50%" stop-color="#FBBF24" />
                                                <stop offset="50%" stop-color="#E5E7EB" />
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#half)"
                                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                    </svg>
                                <?php } else { ?>
                                    <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                    </svg>
                                <?php }?>
                            <?php }
}
?>
                        </div>
                        <span class="text-sm text-gray-600">(<?php echo $_smarty_tpl->getValue('product')['review_count'];?>
)</span>
                    </div>
                </div>

                                <div class="text-3xl font-bold text-gray-900">
                    $<?php echo $_smarty_tpl->getValue('product')['price'];?>

                </div>

                                <div class="grid grid-cols-2 gap-6">
                                        <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-3">Available Size</h3>
                        <div class="flex space-x-2">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['sizes'], 'size');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('size')->value) {
$foreach1DoElse = false;
?>
                                <button
                                    class="w-10 h-10 border border-gray-300 rounded text-sm font-medium hover:border-gray-900 focus:outline-none focus:border-gray-900 <?php if ($_smarty_tpl->getValue('size')['selected']) {?>bg-gray-900 text-white<?php } else { ?>bg-white text-gray-900<?php }?>">
                                    <?php echo $_smarty_tpl->getValue('size')['name'];?>

                                </button>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>

                                        <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-3">Available Color</h3>
                        <div class="flex space-x-2">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['colors'], 'color');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('color')->value) {
$foreach2DoElse = false;
?>
                                <button
                                    class="w-8 h-8 rounded-full border-2 focus:outline-none <?php if ($_smarty_tpl->getValue('color')['selected']) {?>border-gray-900<?php } else { ?>border-gray-300<?php }?>"
                                    style="background-color: <?php echo $_smarty_tpl->getValue('color')['hex'];?>
;" title="<?php echo $_smarty_tpl->getValue('color')['name'];?>
">
                                </button>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>

                                <div class="text-sm text-gray-600">
                    Last 1 left - <span class="font-medium">make it yours!</span>
                </div>

                                <div class="flex items-center space-x-4">
                    <div class="flex items-center border border-gray-300 rounded">
                        <button class="p-2 hover:bg-gray-100" onclick="decreaseQuantity()">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </button>
                        <input type="number" id="quantity" value="1" min="1"
                            class="w-16 text-center border-0 focus:outline-none">
                        <button class="p-2 hover:bg-gray-100" onclick="increaseQuantity()">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>
                    </div>
                    <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-800 transition-colors">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

                <div class="mt-12">
                        <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8">
                    <button
                        class="tab-button py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200 border-gray-900 text-gray-900"
                        data-tab="details">
                        The Details
                    </button>
                    <button
                        class="tab-button py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300"
                        data-tab="reviews">
                        Ratings & Reviews
                        <span
                            class="ml-2 bg-gray-100 text-gray-600 py-1 px-2 rounded-full text-xs"><?php echo $_smarty_tpl->getValue('product')['review_count'];?>
</span>
                    </button>
                </nav>
            </div>

                        <div class="mt-8">
                                <div id="details-tab" class="tab-content">
                    <div class="prose max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            <?php echo $_smarty_tpl->getValue('product')['description'];?>

                        </p>

                        <?php if ($_smarty_tpl->getValue('product')['features']) {?>
                            <h3 class="text-lg font-medium text-gray-900 mt-6 mb-3">Features</h3>
                            <ul class="space-y-2">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['features'], 'feature');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach3DoElse = false;
?>
                                    <li class="text-gray-700">• <?php echo $_smarty_tpl->getValue('feature');?>
</li>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('product')['care_instructions']) {?>
                            <h3 class="text-lg font-medium text-gray-900 mt-6 mb-3">Care Instructions</h3>
                            <p class="text-gray-700"><?php echo $_smarty_tpl->getValue('product')['care_instructions'];?>
</p>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('product')['specifications']) {?>
                            <h3 class="text-lg font-medium text-gray-900 mt-6 mb-3">Specifications</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['specifications'], 'spec_value', false, 'spec_name');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('spec_name')->value => $_smarty_tpl->getVariable('spec_value')->value) {
$foreach4DoElse = false;
?>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-900"><?php echo $_smarty_tpl->getValue('spec_name');?>
</dt>
                                        <dd class="text-sm text-gray-700"><?php echo $_smarty_tpl->getValue('spec_value');?>
</dd>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                    </div>
                </div>

                                <div id="reviews-tab" class="tab-content hidden">
                                        <div class="bg-gray-50 rounded-lg p-6 mb-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-gray-900"><?php echo $_smarty_tpl->getValue('product')['average_rating'];?>
</div>
                                <div class="flex justify-center items-center mt-2">
                                    <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                        <?php if ($_smarty_tpl->getValue('i') <= $_smarty_tpl->getValue('product')['rating_full']) {?>
                                            <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        <?php } elseif ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('product')['rating_full']+1 && $_smarty_tpl->getValue('product')['rating_half']) {?>
                                            <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20">
                                                <defs>
                                                    <linearGradient id="half-review">
                                                        <stop offset="50%" stop-color="#FBBF24" />
                                                        <stop offset="50%" stop-color="#E5E7EB" />
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#half-review)"
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        <?php } else { ?>
                                            <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        <?php }?>
                                    <?php }
}
?>
                                </div>
                                <div class="text-sm text-gray-600 mt-1">Based on <?php echo $_smarty_tpl->getValue('product')['review_count'];?>
 reviews</div>
                            </div>

                            <div class="col-span-2">
                                <div class="space-y-2">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['rating_breakdown'], 'breakdown');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('breakdown')->value) {
$foreach5DoElse = false;
?>
                                        <div class="flex items-center space-x-3">
                                            <span class="text-sm text-gray-600 w-8"><?php echo $_smarty_tpl->getValue('breakdown')['stars'];?>
★</span>
                                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full"
                                                    style="width: <?php echo $_smarty_tpl->getValue('breakdown')['percentage'];?>
%"></div>
                                            </div>
                                            <span class="text-sm text-gray-600 w-12"><?php echo $_smarty_tpl->getValue('breakdown')['count'];?>
</span>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>

                                        <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-medium text-gray-900">Customer Reviews</h3>
                        <div class="flex items-center space-x-4">
                            <label for="sort-reviews" class="text-sm text-gray-600">Sort by:</label>
                            <select id="sort-reviews"
                                class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:border-gray-900">
                                <option value="newest">Newest</option>
                                <option value="oldest">Oldest</option>
                                <option value="highest">Highest Rated</option>
                                <option value="lowest">Lowest Rated</option>
                                <option value="helpful">Most Helpful</option>
                            </select>
                        </div>
                    </div>

                                        <div class="space-y-6">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['reviews'], 'review');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('review')->value) {
$foreach6DoElse = false;
?>
                            <div class="border-b border-gray-200 pb-6">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                                            <span
                                                class="text-sm font-medium text-gray-700"><?php echo mb_strtoupper((string) substr((string) $_smarty_tpl->getValue('review')['author'], (int) 0, (int) 1) ?? '', 'UTF-8');?>
</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-sm font-medium text-gray-900"><?php echo $_smarty_tpl->getValue('review')['author'];?>
</h4>
                                                <div class="flex items-center mt-1">
                                                    <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                        <?php if ($_smarty_tpl->getValue('i') <= $_smarty_tpl->getValue('review')['rating']) {?>
                                                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                            </svg>
                                                        <?php } else { ?>
                                                            <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                            </svg>
                                                        <?php }?>
                                                    <?php }
}
?>
                                                </div>
                                            </div>
                                            <span class="text-sm text-gray-500"><?php echo $_smarty_tpl->getValue('review')['date'];?>
</span>
                                        </div>
                                        <p class="mt-3 text-gray-700 text-sm leading-relaxed"><?php echo $_smarty_tpl->getValue('review')['comment'];?>
</p>

                                                                                <div class="flex items-center mt-4 space-x-4">
                                            <button
                                                class="flex items-center space-x-1 text-xs text-gray-500 hover:text-gray-700">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V8a2 2 0 00-2-2H4.5a2.5 2.5 0 000 5h2.99L7 20" />
                                                </svg>
                                                <span>Like</span>
                                                <?php if ($_smarty_tpl->getValue('review')['likes'] > 0) {?><span>(<?php echo $_smarty_tpl->getValue('review')['likes'];?>
)</span><?php }?>
                                            </button>
                                            <button
                                                class="flex items-center space-x-1 text-xs text-gray-500 hover:text-gray-700">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                                <span>Reply</span>
                                            </button>
                                            <span class="text-xs text-gray-400">•</span>
                                            <span class="text-xs text-gray-500"><?php echo $_smarty_tpl->getValue('review')['helpful_count'];?>
 people found this
                                                helpful</span>
                                        </div>

                                                                                <?php if ($_smarty_tpl->getValue('review')['replies']) {?>
                                            <div class="mt-4 space-y-3">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('review')['replies'], 'reply');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reply')->value) {
$foreach7DoElse = false;
?>
                                                    <div class="bg-gray-50 rounded p-3 ml-6">
                                                        <div class="flex items-center justify-between mb-2">
                                                            <span class="text-sm font-medium text-gray-900"><?php echo $_smarty_tpl->getValue('reply')['author'];?>
</span>
                                                            <span class="text-xs text-gray-500"><?php echo $_smarty_tpl->getValue('reply')['date'];?>
</span>
                                                        </div>
                                                        <p class="text-sm text-gray-700"><?php echo $_smarty_tpl->getValue('reply')['comment'];?>
</p>
                                                    </div>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>

                                        <?php if ($_smarty_tpl->getValue('product')['review_pagination']) {?>
                        <div class="flex items-center justify-center mt-8 space-x-2">
                            <button
                                class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 <?php if ($_smarty_tpl->getValue('product')['review_pagination']['current_page'] == 1) {?>cursor-not-allowed<?php }?>">
                                Previous
                            </button>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['review_pagination']['pages'], 'page');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach8DoElse = false;
?>
                                <button
                                    class="px-3 py-2 text-sm rounded <?php if ($_smarty_tpl->getValue('page')['current']) {?>bg-gray-900 text-white<?php } else { ?>text-gray-700 hover:bg-gray-100<?php }?>">
                                    <?php echo $_smarty_tpl->getValue('page')['number'];?>

                                </button>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <button class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700">
                                Next
                            </button>
                        </div>
                    <?php }?>

                                        <div class="mt-12 border-t border-gray-200 pt-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Write a Review</h3>
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="reviewer-name"
                                        class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                    <input type="text" id="reviewer-name"
                                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-gray-900">
                                </div>
                                <div>
                                    <label for="reviewer-email"
                                        class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="reviewer-email"
                                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-gray-900">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                                <div class="flex space-x-1">
                                    <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                        <button type="button"
                                            class="star-rating w-6 h-6 text-gray-300 hover:text-yellow-400 focus:outline-none"
                                            data-rating="<?php echo $_smarty_tpl->getValue('i');?>
">
                                            <svg class="w-full h-full fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        </button>
                                    <?php }
}
?>
                                </div>
                            </div>
                            <div>
                                <label for="review-text" class="block text-sm font-medium text-gray-700 mb-1">Review</label>
                                <textarea id="review-text" rows="4"
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-gray-900"
                                    placeholder="Share your thoughts about this product..."></textarea>
                            </div>
                            <button type="submit"
                                class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-800 transition-colors">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');

                    // Remove active classes from all tabs
                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-gray-900', 'text-gray-900');
                        btn.classList.add('border-transparent', 'text-gray-500');
                    });

                    // Add active class to clicked tab
                    this.classList.remove('border-transparent', 'text-gray-500');
                    this.classList.add('border-gray-900', 'text-gray-900');

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Show target tab content
                    document.getElementById(targetTab + '-tab').classList.remove('hidden');
                });
            });

            // Quantity controls
            window.decreaseQuantity = function() {
                const input = document.getElementById('quantity');
                const value = parseInt(input.value);
                if (value > 1) {
                    input.value = value - 1;
                }
            };

            window.increaseQuantity = function() {
                const input = document.getElementById('quantity');
                const value = parseInt(input.value);
                input.value = value + 1;
            };

            // Star rating functionality
            const starButtons = document.querySelectorAll('.star-rating');
            let selectedRating = 0;

            starButtons.forEach(button => {
                button.addEventListener('click', function() {
                    selectedRating = parseInt(this.getAttribute('data-rating'));
                    updateStarDisplay();
                });

                button.addEventListener('mouseenter', function() {
                    const hoverRating = parseInt(this.getAttribute('data-rating'));
                    updateStarDisplay(hoverRating);
                });
            });

            document.querySelector('.star-rating').parentElement.addEventListener('mouseleave', function() {
                updateStarDisplay();
            });

            function updateStarDisplay(hoverRating = null) {
                const rating = hoverRating || selectedRating;
                starButtons.forEach((button, index) => {
                    if (index < rating) {
                        button.classList.remove('text-gray-300');
                        button.classList.add('text-yellow-400');
                    } else {
                        button.classList.remove('text-yellow-400');
                        button.classList.add('text-gray-300');
                    }
                });
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
