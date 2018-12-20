using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threaing.Tasks;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
        }
    }
}

public class Trainer 
{
    void Operate()
    {
        var dog = new Poodle();
        dog.HasSpoken +=dog_HasSpoken; 
    }

    void dog_HasSpoken(object, sende, EventArgs e)
    {
        throw new NotImplementedException();
    }

}

 public partial class Dog
    {
        // properties holds values
        public string Name { get; set; }

        private string _name;
        public int Name
        {
            get { return _name; }
            private set { 
                // look at value
                _name = value; 
                }
        }

        public event EventHandler HasSpoken;

        public void Speak(int times, string what = "bark", bool sit = true )
        {
            // TODO
            if (HasSpoken != null)
                HasSpoken(this, EventArgs.Empty); 
        }

        // only by this class
        private void Foo() { }

        // only this and derived classes
        protected void Bar() { }

        // only in this assembly
        internal void Daw() { }


    }

    class Poodle: Dog
    {
        void x() 
        {
            this.Speak(2, sit: true);
        }
    }
}