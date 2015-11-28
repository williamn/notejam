defmodule Notejam.UsersController do
  use Notejam.Web, :controller

  def new(conn, _params) do
    render conn, "new.html", title: "Sign Up"
  end
end