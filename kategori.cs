using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Pustaka
{
    #region Kategori
    public class Kategori
    {
        #region Member Variables
        protected int _id_kategori;
        protected string _nama_kategori;
        #endregion
        #region Constructors
        public Kategori() { }
        public Kategori(string nama_kategori)
        {
            this._nama_kategori=nama_kategori;
        }
        #endregion
        #region Public Properties
        public virtual int Id_kategori
        {
            get {return _id_kategori;}
            set {_id_kategori=value;}
        }
        public virtual string Nama_kategori
        {
            get {return _nama_kategori;}
            set {_nama_kategori=value;}
        }
        #endregion
    }
    #endregion
}