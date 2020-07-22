<?php
namespace Haruta\Nutrients\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface;

class Uninstall implements UninstallInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_calories');
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_carb');
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_fat');
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_protein');
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_sugar');
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_salt');
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'nutrients_dietary_fiber');

        //グループ
        $groupName = 'Nutrition facts'; /* Label of your group*/
        $entityTypeId = $eavSetup->getEntityTypeId('catalog_product'); /* get entity type id so that attribute are only assigned to catalog_product */
        $attributeSetIds = $eavSetup->getAllAttributeSetIds($entityTypeId); /* Here we have fetched all attribute set as we want attribute group to show under all attribute set.*/

        foreach ($attributeSetIds as $attributeSetId) {
            $attributeGroupCode = $this->convertToAttributeGroupCode($groupName);
            $groupId = $eavSetup->getAttributeGroup($entityTypeId, $attributeSetId, $attributeGroupCode, 'attribute_group_id');
            $eavSetup->removeAttributeGroup($entityTypeId, $attributeSetId, $groupId);
        }
    }
}
