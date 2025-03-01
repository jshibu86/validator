# Column Types/Rules/Database support

| Column Type      | Rule            | MySql/MariaDB | SQLite | SQL Server | PostgreSQL | Oracle | DB2 |
|------------------|-----------------|---------------|--------|------------|------------|--------|-----|
| bigint           | integer         | ✓             | ✓      | ✓          | ✓          |        | ✓   |
| bigserial        | integer         |               | ✓      |            | ✓          |        |     |
| binary           |                 | ✓             |        | ✓          |            |        | ✓   |
| binary_double    | numeric         |               |        |            |            | ✓      |     |
| binary_float     | numeric         |               |        |            |            | ✓      |     |
| binary_integer   | integer         |               |        |            |            | ✓      |     |
| bit              | boolean         |               |        | ✓          |            |        |     |
| blob             |                 | ✓             | ✓      | ✓          |            | ✓      | ✓   |
| bool             | boolean         |               |        |            | ✓          |        |     |
| boolean          | boolean         |               | ✓      |            | ✓          |        |     |
| bpchar           | string          |               |        |            | ✓          |        |     |
| bytea            |                 |               |        |            | ✓          |        |     |
| char             | string          | ✓             | ✓      | ✓          | ✓          | ✓      |     |
| character        | string          |               |        |            |            |        | ✓   |
| clob             | string          |               | ✓      |            |            | ✓      | ✓   |
| date             | date            | ✓             | ✓      | ✓          | ✓          | ✓      | ✓   |
| datetime         | date            | ✓             | ✓      | ✓          | ✓          |        |     |
| datetime2        | date            |               |        | ✓          |            |        |     |
| datetimeoffset   | date            |               |        | ✓          |            |        |     |
| decimal          | numeric         | ✓             | ✓      | ✓          | ✓          |        | ✓   |
| double           | numeric         | ✓             | ✓      | ✓          | ✓          |        | ✓   |
| double precision | numeric         |               | ✓      | ✓          | ✓          |        |     |
| float            | numeric         | ✓             | ✓      | ✓          | ✓          | ✓      |     |
| float4           | numeric         |               |        |            | ✓          |        |     |
| float8           | numeric         |               |        |            | ✓          |        |     |
| image            |                 |               | ✓      | ✓          |            |        |     |
| inet             | ip              |               |        |            | ✓          |        |     |
| int              | integer         | ✓             | ✓      | ✓          | ✓          |        |     |
| int2             | integer         |               |        |            | ✓          |        |     |
| int4             | integer         |               |        |            | ✓          |        |     |
| int8             | integer         |               |        |            | ✓          |        |     |
| integer          | integer         | ✓             | ✓      |            | ✓          | ✓      | ✓   |
| interval         | string          |               |        |            | ✓          |        |     |
| json             | array           | ✓             |        |            | ✓          |        |     |
| jsonb            | array           |               |        |            | ✓          |        |     |
| long             | string          |               |        |            |            | ✓      |     |
| long raw         |                 |               |        |            |            | ✓      |     |
| longblob         |                 | ✓             |        |            |            |        |     |
| longtext         | string          | ✓             | ✓      |            |            |        |     |
| longvarchar      | string          |               | ✓      |            |            |        |     |
| mediumblob       |                 | ✓             |        |            |            |        |     |
| mediumint        | integer         | ✓             | ✓      |            |            |        |     |
| mediumtext       | string          | ✓             | ✓      |            |            |        |     |
| money            | numeric         |               |        | ✓          | ✓          |        |     |
| nchar            | string          |               |        |            |            | ✓      |     |
| nclob            | string          |               |        |            |            | ✓      |     |
| ntext            | string          |               | ✓      | ✓          |            |        |     |
| number           | integer         |               |        |            |            | ✓      |     |
| numeric          | numeric         | ✓             | ✓      | ✓          | ✓          |        |     |
| nvarchar         | string          |               |        | ✓          |            |        |     |
| nvarchar2        | string          |               | ✓      |            |            | ✓      |     |
| pls_integer      | boolean         |               |        |            |            | ✓      |     |
| raw              |                 |               |        |            |            | ✓      |     |
| real             | numeric         | ✓             | ✓      | ✓          | ✓          |        | ✓   |
| rowid            | string          |               |        |            |            | ✓      |     |
| serial           | integer         |               | ✓      |            | ✓          |        |     |
| serial4          | integer         |               |        |            | ✓          |        |     |
| serial8          | integer         |               |        |            | ✓          |        |     |
| set              | array           | ✓             |        |            |            |        |     |
| smalldatetime    | date            |               |        | ✓          |            |        |     |
| smallint         | integer         | ✓             | ✓      | ✓          | ✓          |        | ✓   |
| smallmoney       | integer         |               |        | ✓          |            |        |     |
| string           | string          | ✓             |        |            |            |        |     |
| text             | string          | ✓             | ✓      | ✓          | ✓          |        |     |
| time             | date_format:H:i | ✓             | ✓      | ✓          | ✓          |        | ✓   |
| timestamp        | date            | ✓             | ✓      |            | ✓          | ✓      | ✓   |
| timestamptz      | date            |               |        |            | ✓          | ✓      |     |
| timetz           | date_format:H:i |               |        |            |            |        |     |
| tinyblob         |                 | ✓             |        |            |            |        |     |
| tinyint          | integer         | ✓             | ✓      | ✓          |            |        |     |
| tinytext         | string          | ✓             | ✓      |            |            |        |     |
| tsvector         | string          |               |        |            | ✓          |        |     |
| uniqueidentifier | uuid            |               |        | ✓          |            |        |     |
| urowid           | string          |               |        |            |            | ✓      |     |
| uuid             | uuid            |               |        |            | ✓          |        |     |
| varbinary        |                 | ✓             |        | ✓          |            |        | ✓   |
| varchar          | string          | ✓             | ✓      | ✓          | ✓          | ✓      | ✓   |
| varchar2         | string          |               | ✓      |            |            | ✓      |     |
| year             | date            | ✓             |        |            | ✓          |        |     |
| _varchar         | string          |               |        |            | ✓          |        |     |
