# Magelearn Categoryfaq

    ``magelearn/module-categoryfaq``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Magento 2 Category FAQ Extension
- Manage FAQ Categories (Add, Edit, Delete, Enable, Disable)
- Manage FAQs (Add, Edit, Delete, Status [Enable/Disable])
- Assign Categories to FAQs.
- Display FAQs Categorywise on Frontend.
- Also provided GraphQL Endpoints to check the FAQ listing data with GraphQL

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Magelearn`
 - Enable the module by running `php bin/magento module:enable Magelearn_Categoryfaq`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Run Code compile `php bin/magento setup:d:c`\*
 - Static content deploy `php bin/magento setup:s:d`\*
 - Flush the cache by running `php bin/magento cache:clean` and `php bin/magento cache:flush` 

### GraphQL Query
<pre>
{
  faq {
    allFaqs {
      id
      title
      answer
      status
      categoryName
    }
  }
}
</pre>

## Configuration

[![Dashboard-Magento-Admin.png](https://i.postimg.cc/MT3252j4/Dashboard-Magento-Admin.png)](https://postimg.cc/9R9nXkbt)

[![FAQ-Categories-FAQ-Categories.png](https://i.postimg.cc/mk1qSc4z/FAQ-Categories-FAQ-Categories.png)](https://postimg.cc/ctZXxLr0)

[![New-Category-Categorys-Magento-Admin.png](https://i.postimg.cc/VLq1yTyS/New-Category-Categorys-Magento-Admin.png)](https://postimg.cc/BXnRHmns)

[![Screenshot-from-2022-05-02-19-11-47.png](https://i.postimg.cc/j5n0M3QS/Screenshot-from-2022-05-02-19-11-47.png)](https://postimg.cc/PpHRx4Rg)

[![Screenshot-from-2022-05-02-19-13-26.png](https://i.postimg.cc/mgLvvgNq/Screenshot-from-2022-05-02-19-13-26.png)](https://postimg.cc/0b4Xmx4d)

