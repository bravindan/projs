# Generated by Django 3.0.3 on 2020-02-16 15:33

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('api', '0003_service'),
    ]

    operations = [
        migrations.AddField(
            model_name='service',
            name='service_fee',
            field=models.DecimalField(decimal_places=2, default=50.0, max_digits=8),
            preserve_default=False,
        ),
    ]
