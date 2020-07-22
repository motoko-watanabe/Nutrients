<?php
namespace Haruta\Nutrients\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
     }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        //カロリー
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_calories',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Calories[kcal]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //炭水化物
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_carb',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Total carb[g]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //脂質
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_fat',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Total fat[g]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //タンパク質
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_protein',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Protein[g]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //糖質
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_sugar',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Sugar[g]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //塩分量
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_salt',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Salt[g]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //食物繊維
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_dietary_fiber',   /* Define the attribute code */
            [
                'type' => 'decimal', /*Define the datatype of attribute such as string, int*/
                'backend' => 'Haruta\Nutrients\Model\Product\Attribute\Backend\Nutrients',  /* Define the backend */
                'frontend' => '',
                'label' => 'Dietary Fiber[g]', /* Provide the label of attribute to be used to show on frontend and admin*/
                'input' => 'text',  /*Define the formelement of attribute such as select,input,textbox */
                'class' => 'validate-number', /* Add a class name if you want to provide any */
                'source' => '', /* If attribute is select or multiselect then to get the options detail provide the source */
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        //グループ
        $groupName = 'Nutrition facts'; /* Label of your group*/
        $entityTypeId = $eavSetup->getEntityTypeId('catalog_product'); /* get entity type id so that attribute are only assigned to catalog_product */
        $attributeSetIds = $eavSetup->getAllAttributeSetIds($entityTypeId); /* Here we have fetched all attribute set as we want attribute group to show under all attribute set.*/

        foreach($attributeSetIds as $attributeSetId) {
            $eavSetup->addAttributeGroup($entityTypeId, $attributeSetId, $groupName, 19);
            $attributeGroupId = $eavSetup->getAttributeGroupId($entityTypeId, $attributeSetId, $groupName);
            // Add existing attribute to group
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_calories');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_carb');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_fat');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_protein');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_sugar');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_salt');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
            $attributeId = $eavSetup->getAttributeId($entityTypeId, 'nutrients_dietary_fiber');
            $eavSetup->addAttributeToGroup($entityTypeId, $attributeSetId, $attributeGroupId, $attributeId, null);
        }
    }
}
