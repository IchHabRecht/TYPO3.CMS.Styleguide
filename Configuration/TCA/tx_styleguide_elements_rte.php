<?php
return [
    'ctrl' => [
        'title' => 'Form engine elements - rte',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY crdate',
        'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
    ],


    'columns' => [


        'hidden' => [
            'exclude' => 1,
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'Disable',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'Publish Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0'
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'Expiration Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0',
                'range' => [
                    'upper' => mktime(0, 0, 0, 12, 31, 2020)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],


        'rte_1' => [
            'exclude' => 1,
            'label' => 'rte_1',
            'config' => [
                'type' => 'text',
            ],
            'defaultExtras' => 'richtext:rte_transform',
        ],
        'rte_inline_1' => [
            'exclude' => 1,
            'label' => 'rte_inline_1',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_styleguide_elements_rte_inline_1_child',
                'foreign_field' => 'parentid',
                'foreign_table_field' => 'parenttable',
            ],
        ],
        'rte_flex_1' => [
            'exclude' => 1,
            'label' => 'rte_flex_1',
            'config' => [
                'type' => 'flex',
                'ds' => [
                    'default' => '
                        <T3DataStructure>
                            <sheets>
                                <sGeneral>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>tab</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <rte_1>
                                                <TCEforms>
                                                    <label>rte_1</label>
                                                    <config>
                                                        <type>text</type>
                                                    </config>
                                                    <defaultExtras>richtext:rte_transform</defaultExtras>
                                                </TCEforms>
                                            </rte_1>
                                        </el>
                                    </ROOT>
                                </sGeneral>
                                <sSections>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>section</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <section_1>
                                                <title>section_1</title>
                                                <type>array</type>
                                                <section>1</section>
                                                <el>
                                                    <container_1>
                                                        <type>array</type>
                                                        <title>container_1</title>
                                                        <el>
                                                            <rte_1>
                                                                <TCEforms>
                                                                    <label>rte_1</label>
                                                                    <config>
                                                                        <type>text</type>
                                                                    </config>
                                                                    <defaultExtras>richtext:rte_transform</defaultExtras>
                                                                </TCEforms>
                                                            </rte_1>
                                                        </el>
                                                    </container_1>
                                                </el>
                                            </section_1>
                                        </el>
                                    </ROOT>
                                </sSections>
                                <sInline>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>inline</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <inline_1>
                                                <TCEforms>
                                                    <label>inline_1</label>
                                                    <config>
                                                        <type>inline</type>
                                                        <foreign_table>tx_styleguide_elements_rte_flex_1_inline_1_child</foreign_table>
                                                        <foreign_field>parentid</foreign_field>
                                                        <foreign_table_field>parenttable</foreign_table_field>
                                                    </config>
                                                </TCEforms>
                                            </inline_1>
                                        </el>
                                    </ROOT>
                                </sInline>
                            </sheets>
                        </T3DataStructure>
                    ',
                ],
            ],
        ],


    ],


    'types' => [
        '0' => [
            'showitem' => '
                --div--;rte,
                    rte_1,
                --div--;in inline,
                    rte_inline_1,
                --div--;in flex,
                    rte_flex_1,
            ',
        ],


    ],


];
