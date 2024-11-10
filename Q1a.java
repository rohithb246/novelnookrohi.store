class Test1a
{
int a;

Test1a()
{
a=1;
}

Test1a(int i)
{
a=i;
}

void show()
{
System.out.println("\n Value of a : " +a);
}

void show(int m)
{
System.out.println("\n Value of argument passed : " +m);
}
}

class Q1a
{
public static void main(String args[])
{
Test1a ob1=new Test1a(); Test1a ob2=new Test1a(10);

ob1.show(); ob2.show(); ob2.show(33);

}
}
