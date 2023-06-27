function sommenombrespremiers(i1, i2)
{
    if((i1%1 == 0) && (i2%1 == 0))
    {
        console.log(i1 + i2);
    }
    else
    {
        console.log("false");
    }
}

sommenombrespremiers(15, 12);
// sommenombrespremiers(15.2, 12);