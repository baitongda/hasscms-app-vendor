## Dsn connection string parsing

parsing dsn connection strings for most databases.

### Attention! This library is made for Yii2 Framefork.

## Usage

```php
use fourteenmeister\helpers\Dsn;
$dsn = Dsn::parse(Yii::$app->db->dsn);
```