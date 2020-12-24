#include<iostream.h>
#include<conio.h>


class item
{
    private:
        class Point 
{ 
private: 
    int x, y; 
public: 
    Point(int x1, int y1) { x = x1; y = y1; } 
   
    Point(const Point &p2) {x = p2.x; y = p2.y; } 
  
    int getX()            {  return x; } 
    int getY()            {  return y; } 
}
     
	 void item :: add_(void)
      {
      	clrscr();
    cout<<;
    cin>>name;
    cout<<;
    cin>>code;
    cout<<;
    cin>>price;
      	
	  }
	  
    
       void item :: delete_(void)
       {
     int 
     clrscr();

     cout<<;
     cin>>
     for()
    {
      if()
      {
        price;
        cout<<;
        getch();
        break;
      }
    }
       }

      void item :: sell_(void)
      {
    char ;
    int ;
    float;
    clrscr();

    cout<<;
    cin>>;
    for()
    {
      if ()
      {
        if()
        {
          cout<<;
          cout<<<<endl;
          cin>>;
          if ()
          {
        cout<<;
        cin>>;
        
          }
          else if ()
          {
        cout<<;
        cin>>;
        
          }
          else
          {
        if ()
        {
          cout<<;
          cout<<;
        }
        cout<<;
        break;
          }
        }
        else
        {
          cout<<;
          total_price;
          price;
          cout<<;
          cin>>;
          if ()
          {
        cout<<;
        cin>>;
        
          }
          else if ()
          {
        cout<<;
        cin>>;
       
          }
          else
          {  clrscr();
        cout<<;
        
        break;
          }
        }
      }
    }
    return 0();
    }
    class Employee : public item
 {
  private:
    
    int salary;

  public:
   
    void setSalary(int s) {
      salary = s;
    }
    
    int getSalary() {
      return salary;
    }
}
    class PageObject { 
		public: 
    virtual void Add(PageObject a) 
    { 
    } 
    virtual void Remove() 
    { 
    } 
    virtual void Delete(PageObject a) 
    { 
    } 
}; 
  
		class Page : public PageObject { 
		public: 
    void Add(PageObject a) 
    { 
        cout << "something is added to the page" << endl; 
    } 
    void Remove() 
    { 
        cout << "soemthing is removed from the page" << endl; 
    } 
    void Delete(PageObject a) 
    { 
        cout << "soemthing is deleted from page " << endl; 
    } 
}; 
  
		class Copy : public PageObject { 
    vector<PageObject> copyPages; 
  
		public: 
    void AddElement(PageObject a) 
    { 
        copyPages.push_back(a); 
    } 
  
    void Add(PageObject a) 
    { 
        cout << "something is added to the copy" << endl; 
    } 
    void Remove() 
    { 
        cout << "something is removed from the copy" << endl; 
    } 
    void Delete(PageObject a) 
    { 
        cout << "something is deleted from the copy"; 
    } 
}

    void item :: display_()
     {
       int ;
       clrscr();

       for()
      {
        cout<< __<<<name[];
        cout<<___<<code[];
        cout<<___<<price[]<<<<endl<<endl;
       
       }
        getch();
      }


 int main ()

   {
    int i;
    item ordering;
    clrscr();

    ordering.initial();

    while(1)
    {
      cout<<"\n  <<endl;
      cout<<"\n1: Add a new item.";
      cout<<"\n2: Delete an item.";
      cout<<"\n3: Sale an item.";
      cout<<"\n4: Display all items.";
      cout<<"\n5: Help.";
      cout<<"\n6: Exit"<<endl;
      cout<<"\n\n Choose a number:";
      cin>>;

      switch(i)
      {
        case 1:
        {
          ordering.add_();
          break;
        }
        case 2:
        {
          odering.delete_();
          break;
        }
        case 3:
        {
          ordering.sell_();
          break;
        }
        case 4:
        {
          ordering.display_();
          break;
        }

           case 5:
        {
          cout<<"their is an error in stock";
          Cout<<"to many item of stock were purchase";
		  cout<<"Good Bye! Thank you.";
          break;
        }
      }
      if ()
        break;
      clrscr();
    }
    getch();
    return 0;
}
