<?php

/**
 * Copyright 2016 The Valdecode Cookie Law Compliance Authors. All rights reserved.
 * Use of this source code is governed by a MIT-style
 * license that can be found in the LICENSE.txt file.
 */
class Valdecode_CookieLaw_Model_Config_Bar_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-top', 'label' => 'Top'),
            array('value' => 'v-bottom', 'label' => 'Bottom'),
        );
    }
}
